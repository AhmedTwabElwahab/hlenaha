<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\web\TransactionRequest;
use App\Models\bankAccount;
use App\Models\driver;
use App\Models\Transaction;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends BaseController
{
    /**
     * Display all Transactions.
     * @return
     */
    public function index()
    {
        $transactions = Transaction::paginate(APP_PAGINATE);
        return view('transaction.index', compact('transactions'));
    }

    public function create(Request $request)
    {
        $drivers = driver::all();
        $ourBankAccounts = bankAccount::where('user_id',auth()->id())->get();
        $driverR = $request->get('driver');
        return view('transaction.create',compact('driverR','drivers','ourBankAccounts'));
    }

    public function edit(Transaction $transaction)
    {
        $drivers = driver::all();
        $ourBankAccounts = bankAccount::where('user_id',auth()->id())->get();
        $sendToBankAccounts = bankAccount::where('user_id',$transaction->driver->user->id)->get();
        return view('transaction.edit',compact('sendToBankAccounts','drivers','ourBankAccounts','transaction'));
    }

    /**
     * Store a new Transaction in dataBase.
     * @param TransactionRequest $request
     * @return
     */
    public function store(TransactionRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $Transaction = Transaction::createTransaction($request);
            DB::commit();
            return redirect()->route('transaction.index')->withStatus(__('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }


    /**
     * Update the Transaction information.
     * @param TransactionRequest $request
     * @param Transaction $transaction
     * @return
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        DB::beginTransaction();
        try
        {
            //check if the seem bank
            $seem = $request->input('bank_account_id') === $request->input('driver_bank_account_id');

            $transaction->bank_account_id       = $request->input('bank_account_id');
            $transaction->driver_bank_account_id= $request->input('driver_bank_account_id');
            $transaction->driver_id             = $request->input('driver_id') ?? $transaction->driver_id;
            $transaction->amount                = $request->input('amount');
            $transaction->description           = $request->input('description');
            $transaction->date                  = $request->input('date');
            $transaction->fees                  = $seem ? 0 : 5;
            $transaction->updated_at            = Carbon::now();

            if (!$transaction->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return redirect()->route('transaction.index')->withStatus(__('global.update_success'));
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
     * @return
     */
    public function destroy(Transaction $transaction)
    {
        DB::beginTransaction();
        try {
            if (!$transaction->delete())
            {
                throw new Exception('delete_error');
            }
            DB::commit();
            return redirect()->route('transaction.index')->withStatus(__('global.success_delete'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
