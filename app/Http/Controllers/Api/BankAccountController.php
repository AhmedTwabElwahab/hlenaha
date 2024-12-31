<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\web\BankAccountRequest;
use App\Models\bankAccount;
use App\Notifications\SendNotification;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankAccountController extends BaseController
{
    /**
     * Display all BankAccount.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $BankAccounts = BankAccount::where('user_id',auth()->id())->get();
        return $this->sendResponse($BankAccounts, 'All drivers have arrived.');
    }

    /**
     * Store a new Bank_account in dataBase.
     * @param BankAccountRequest $request
     * @return JsonResponse
     */
    public function store(BankAccountRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $Bank_account = BankAccount::createBankAccount($request);
            DB::commit();
            $user = auth()->user();
            $user->notify(new SendNotification('create succes'));
            return $this->sendResponse($Bank_account,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Display information for a specific customer.
     * @param bankAccount $bankAccount
     * @return JsonResponse
     */
    public function show(bankAccount $bankAccount):JsonResponse
    {
        if($bankAccount->user_id == auth()->user()->id)
        {
            return $this->sendResponse($bankAccount, 'BackAccounts info');
        }
        return $this->failed('Not allowed');
    }

    /**
     * Update the Bank_account information.
     * @param BankAccountRequest $request
     * @param bankAccount $bankAccount
     * @return JsonResponse
     */
    public function update(BankAccountRequest $request, bankAccount $bankAccount):JsonResponse
    {
        DB::beginTransaction();
        try
        {
            if($bankAccount->user_id !== auth()->id())
            {
                return $this->failed('Not allowed');
            }
            $bankAccount->bank_account_name_id     = $request->input('bank_account_name_id');
            $bankAccount->user_id          = auth()->id();
            $bankAccount->account_number   = $request->input('account_number');
            $bankAccount->iban             = $request->input('iban');
            $bankAccount->disc             = $request->input('disc');
            $bankAccount->is_default       = $request->input('is_default');
            $bankAccount->updated_at       = Carbon::now();


            if (!$bankAccount->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return $this->sendResponse($bankAccount,'update_success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param bankAccount $bankAccount
     * @return JsonResponse
     */
    public function destroy(bankAccount $bankAccount):JsonResponse
    {
        DB::beginTransaction();
        try {
            if (!$bankAccount->delete())
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
