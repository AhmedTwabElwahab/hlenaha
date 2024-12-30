<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\VerifiesEmails;

use Illuminate\Http\Request;

use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class VerificationApiController extends BaseController
{
    use VerifiesEmails;

    /**

     * Show the email verification notice.

     *

     */

    public function show()

    {

//

    }

    /**

     * Mark the authenticated user’s email address as verified.

     *

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function verify(Request $request)
    {
        DB::beginTransaction();
        try
        {

            $userID = $request['id'];

            $user = User::findOrFail($userID);


            if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
            {
                throw new AuthorizationException;
            }

            $date = date("Y-m-d g:i:s");

            $user->email_verified_at = $date;

            $user->save();

            DB::commit();
            return view('pages.verifySuccess');
        } catch (\Exception $e)
        {
            DB::rollBack();
            return $this->failed('error verified');
        }
    }

    /**

     * Resend the email verification notification.

     *

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {

            return response()->json('User already have verified email!', 422);

            // return redirect($this->redirectPath());

        }

            $request->user()->sendEmailVerificationNotification();

            return response()->json('The notification has been resubmitted');

              // return back()->with(‘resent’, true);

    }
}
