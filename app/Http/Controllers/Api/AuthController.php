<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\SocialLoginRequest;
use App\Http\Requests\Api\Users\LoginUserRequest;
use App\Http\Requests\Api\Users\UserExistRequest;
use App\Http\Requests\Api\Users\UserRestPasswordRequest;
use App\Models\LinkedSocialAccount;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends BaseController
{
    public function index(Request $request): JsonResponse
    {
        return $this->failed('Unauthorised');
    }

    /**
     * login exists user.
     *
     * @param LoginUserRequest $request
     * @return JsonResponse
     */
    public function login(LoginUserRequest $request): JsonResponse
    {
        $email = $request->input('email');
        $login_type = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if (auth()->attempt([
            $login_type => $email,
            'password' => $request->input('password')
        ]))
        {
            $success['token'] = Auth::user()->createToken('MY_TOKEN_API')->plainTextToken;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            //return $this->sendResponse('Unauthorised.','fail',401);
            return $this->detect_user_role($email, $request->input('password'));
        }
    }

    /**
     * LOGOUT from API.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        if(auth()->check())
        {
            $request->user()->tokens()->delete();
            return response()->json(['message' => 'Logged out successfully']);
        }
        return $this->failed('Unauthorised');
    }


    /**
     * check if client exist in user_role table or not.
     *
     * @param string $email
     * @param string $password
     * @return JsonResponse
     */
    protected function detect_user_role(string $email, string $password): JsonResponse
    {
        if (Auth::attempt([
            'email' => $email,
            'password' => $password])) {
            $user = Auth::user();
            // this user is logged user_role table
            $success['token'] = Auth::user()->createToken('MY_TOKEN_API_ROLE')->accessToken;
            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendResponse('Unauthorised.', 'fail', 401);
        }
    }

    /**
     * Forget Password method.
     *
     * @param UserExistRequest $request
     * @return JsonResponse
     */
    public function forgetPassword(UserExistRequest $request): JsonResponse
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );
        if ($status != Password::RESET_LINK_SENT)
        {
            return response()->json(['message' => 'Unable to send reset link.'], 500);
        }
        return response()->json(['message' => 'Reset link sent to your email.']);
    }

    /**
     * update password.
     *
     * @param UserRestPasswordRequest $request
     * @return JsonResponse
     */
    public function update(UserRestPasswordRequest $request): JsonResponse
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password)
            {
                $user->forceFill([
                    'password' => ($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );
        if ($status != Password::PASSWORD_RESET)
        {
            return response()->json(['message' => 'Unable to reset password.'], 500);
        }
        return response()->json(['message' => 'Password reset successfully.']);
    }


    /**
     * @param SocialLoginRequest $request
     * @return JsonResponse
     */
    public function socialLogin(SocialLoginRequest $request)
    {
        try
        {
            $accessToken  = $request->get('access_token');
            $provider     = $request->get('provider');
            $providerUser = Socialite::driver($provider)->userFromToken($accessToken);

        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ]);
        }

        if (filled($providerUser)) {
            $user = $this->findOrCreate($providerUser, $provider);
        } else {
            $user = $providerUser;
        }
        auth()->login($user);
        if (auth()->check()) {
            return response()->json([
                'message' => 'Logged in successfully',
                'data' => ['token' => auth()->user()->createToken('API Token')->plainTextToken],
            ]);
        } else {
            return $this->error(
                message: 'Failed to Login try again',
                code: 401
            );
        }


    }


    protected function findOrCreate($providerUser, string $provider): User
    {
        $linkedSocialAccount = LinkedSocialAccount::query()->where('provider_name', $provider)
            ->where('provider_id', $providerUser->getId())
            ->first();

        if ($linkedSocialAccount) {
            return $linkedSocialAccount->user;
        } else {
            $user = null;

            if ($email = $providerUser->getEmail())
            {
                $user = User::query()->where('email', $email)->first();
            }

            if (! $user)
            {
                $user = User::query()->create([
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                ]);
                $user->markEmailAsVerified();
            }

            $user->linkedSocialAccounts()->create([
                'provider_id' => $providerUser->getId(),
                'provider_name' => $provider,
            ]);

            return $user;
        }
    }
}
