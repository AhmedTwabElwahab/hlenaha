<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\web\BankAccountRequest;
use App\Models\bankAccount;
use App\Models\bankAccountName;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BankAccountController extends BaseController
{
    /**
     * Display all BankAccount.
     * @return
     */
    public function index()
    {
        $BankAccounts = BankAccount::where('user_id',auth()->user()->id)->get();
        return view('BankAccount.index', compact('BankAccounts'));
    }

    /**
     * Store a new Bank_account in dataBase.
     * @param BankAccountRequest $request
     * @return
     */
    public function store(BankAccountRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $Bank_account = BankAccount::createBankAccount($request);
            DB::commit();
            return redirect()->route('bank_account')->withStatus( __('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors( __('global.error_create'));
        }
    }


    public function edit(bankAccount $account)
    {
        $banks = bankAccountName::all();
        return view('BankAccount.edit', compact('banks','account'));
    }


    public function create()
    {
        $banks = bankAccountName::all();
        return view('BankAccount.create', compact('banks'));
    }

    /**
     * Update the Bank_account information.
     * @param BankAccountRequest $request
     * @param bankAccount $bankAccount
     * @return
     */
    public function update(BankAccountRequest $request, bankAccount $bankAccount)
    {
        DB::beginTransaction();
        try
        {
            $bankAccount->bank_account_name_id     = $request->input('bank_account_name_id');
            $bankAccount->user_id          = $request->input('user_id') ?? $bankAccount->user_id;
            $bankAccount->account_number   = $request->input('account_number');
            $bankAccount->iban             = $request->input('iban');
            $bankAccount->disc             = $request->input('disc');
            $bankAccount->is_default       = !($request->input('is_default') == null);
            $bankAccount->updated_at       = Carbon::now();


            if (!$bankAccount->update())
            {
                throw new Exception('update_error');
            }
            DB::commit();
            return redirect()->route('bank_account')->withStatus( __('global.update_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors( __('global.error_update'));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param bankAccount $bankAccount
     * @return
     */
    public function destroy(bankAccount $bankAccount)
    {
        DB::beginTransaction();
        try {
            if (!$bankAccount->delete())
            {
                throw new Exception('delete_error');
            }
            DB::commit();
            return redirect()->route('bank_account')->withStatus(__('global.delete_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors( __('global.error_delete'));

        }
    }

    public function query(Request $request)
    {
        if (!$request->has('key'))
        {
            return $this->failed('not Found');
        }

        if(Schema::hasColumn('bank_accounts', $request->input('key')))
        {
            $banks = bankAccount::join('bank_account_names', 'bank_account_names.id', '=', 'bank_accounts.bank_account_name_id')
                ->select('bank_accounts.id', 'bank_account_names.name')
                ->where('bank_accounts.user_id', '=', $request->input('value'))
                ->get();
            return $banks;
        }
        return $this->failed('not Found');
    }
}
