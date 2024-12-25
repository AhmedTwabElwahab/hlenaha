<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\web\TransactionRequest;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class TransactionController extends BaseController
{
    /**
     * Display all Transactions.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $transactions = Transaction::all();
        return $this->sendResponse($transactions, 'All transactions have arrived.');
    }

    /**
     * Store a new Transaction in dataBase.
     * @param TransactionRequest $request
     * @return JsonResponse
     */
    public function store(TransactionRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $Transaction = Transaction::createTransaction($request);
            DB::commit();
            return $this->sendResponse($Transaction,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Display information for a specific customer.
     * @param Transaction $transaction
     * @return JsonResponse
     */
    public function show(Transaction $transaction): JsonResponse
    {
        return $this->sendResponse($transaction,'transaction show.');
    }

    /**
     * Update the Transaction information.
     * @param TransactionRequest $request
     * @param Transaction $transaction
     * @return JsonResponse
     */
    public function update(TransactionRequest $request, Transaction $transaction): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $transaction->bank_account_id       = $request->input('bank_account_id');
            $transaction->driver_id             = $request->input('driver_id');
            $transaction->amount                = $request->input('amount');
            $transaction->description           = $request->input('description');
            $transaction->date                  = $request->input('date');
            $transaction->updated_at            = Carbon::now();

            if (!$transaction->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return $this->sendResponse($transaction,'update_success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Transaction $transaction
     * @return JsonResponse
     */
    public function destroy(Transaction $transaction): JsonResponse
    {
        DB::beginTransaction();
        try {
            if (!$transaction->delete())
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
