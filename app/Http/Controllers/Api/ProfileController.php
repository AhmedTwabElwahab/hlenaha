<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\profileRequest;
use App\Http\Requests\api\UserRestPasswordRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function index(): JsonResponse
    {
        $user = User::where('id', auth()->user()->id)->with(['driver'])->get();
        return $this->sendResponse($user, 'Users retrieved successfully.');
    }


    public function update(profileRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $User = auth()->user();
            $send_Email = false;
            if ($request->input('email') !== $User->email)
            {
                $send_Email = true;
                $User->email_verified_at = null;
            }
            $User->name               = $request->input('name') ?? $User->name;
            $User->email              = $request->input('email') ?? $User->email;
            $User->gender             = $request->input('gender');
            $User->phone              = $request->input('phone') ?? $User->phone;
            $User->birth_date         = $request->input('birth_date');
            $User->updated_at         = Carbon::now();

            if (!$User->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();

            $send_Email ? $User->sendEmailVerificationNotification() : '';
            return $this->sendResponse($User, 'User updated successfully.');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    public function forgotPassword(UserRestPasswordRequest $request)
    {
        DB::beginTransaction();
        try
        {
            // Check if the current password matches
            if (!Hash::check($request->current_password, Auth::user()->password))
            {
                throw new Exception('current_password_error');
            }

            // Update the password
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();
            DB::commit();
            return $this->sendResponse($user,__('global.update_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }

    }

}
