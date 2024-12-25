<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Users\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    /**
     * Display all Users.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        if(auth()->user()->role != ADMIN_ROLE)
        {
            return $this->sendResponse([], 'not_allowed');
        }
        $Users = User::where('role',USER_ROLE)->get();
        return $this->sendResponse($Users, 'All Users have arrived.');
    }

    /**
     * Store a new User in dataBase.
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            if(auth()->guard('api')->user()->role == USER_ROLE)
            {
                return $this->sendResponse([], 'not_allowed');
            }
            $User = User::CreateUser($request);
            DB::commit();
            return $this->sendResponse($User,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Display information for a specific User.
     * @param User $User
     * @return JsonResponse
     */
    public function show(User $User): JsonResponse
    {
        if(auth()->guard('api')->user()->role == ADMIN_ROLE)
        {
            return $this->sendResponse($User,'success_show');
        }
        return $this->sendResponse([], 'not_allowed');
    }

    /**
     * Update the User information.
     * @param UserRequest $request
     * @param User $User
     * @return JsonResponse
     */
    public function update(UserRequest $request, User $User): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            if(auth()->guard('api')->user()->role == USER_ROLE)
            {
                return $this->sendResponse([], 'not_allowed');
            }

            $User->username           = $request->input('username')?? $User->username;
            $User->email              = $request->input('email') ?? $User->email;
            $User->password           = Hash::make($request->input('password'));
            $User->active             = $request->input('active') ?? $User->active;
            $User->updated_at         = Carbon::now();

            if (!$User->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return $this->sendResponse($User,'update_success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param User $User
     * @return JsonResponse
     */
    public function destroy(User $User): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            if(auth()->guard('api')->user()->role == USER_ROLE)
            {
                return $this->sendResponse([], 'not_allowed');
            }

            if (!$User->delete())
            {
                throw new Exception('delete_error');
            }
            DB::commit();
            return $this->success('success_delete');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
