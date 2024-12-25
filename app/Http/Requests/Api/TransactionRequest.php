<?php

namespace App\Http\Requests\Api;


class TransactionRequest extends APIRequest
{
    protected array $rules = [
        'bank_account_id'         => 'required|numeric|exists:bank_accounts,id',
        'driver_id'               => 'required|numeric|exists:drivers,id',
        'amount'                  => 'required|numeric',
        'description'             => 'required|string',
        'date'                    => 'required|date',
    ];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function onUpdate(): array
    {
        return $this->rules;
    }
    protected function onCreate(): array
    {
        return $this->rules;
    }
    public function rules(): array
    {
        return request()->isMethod('put') || request()->isMethod('patch') ?
            $this->onUpdate() : $this->onCreate();
    }
}
