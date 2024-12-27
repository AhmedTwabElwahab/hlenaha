<?php

namespace App\Http\Controllers;

use App\Http\Requests\web\UserRequest;
use App\Http\Requests\web\UserRestPasswordRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }


    public function update(UserRequest $request, User $User)
    {
        DB::beginTransaction();
        try
        {
            $User->name               = $request->input('name') ?? $User->name;
            $User->email              = $request->input('email') ?? $User->email;
            $User->gender             = $request->input('gender');
            $User->phone              = $request->input('phone') ?? $User->phone;
            $User->birth_date         = $request->input('birth_date');
            if ($request->hasFile('password'))
            {
                $User->password           = Hash::make($request->input('password'));
            }
            $User->updated_at         = Carbon::now();

            if (!$User->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return redirect()->back()->withStatus(__('global.create_success'));
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
            $user->password = $request->password;
            $user->save();
            DB::commit();
            return redirect()->back()->withStatus(__('global.update_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }

    }

}
