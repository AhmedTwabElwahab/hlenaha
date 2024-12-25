<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\web\BankAccountRequest;
use App\Models\bankAccount;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class BankAccountController extends BaseController
{
    /**
     * Display all BankAccount.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $BankAccounts = BankAccount::all();
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
        return $this->sendResponse($bankAccount, 'BackAccounts info');
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
            $bankAccount->account_name     = $request->input('account_name');
            $bankAccount->driver_id        = $request->input('driver_id');
            $bankAccount->user_id          = $request->input('user_id');
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
