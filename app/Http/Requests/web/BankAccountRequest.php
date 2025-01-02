<?php

namespace App\Http\Requests\web;


use Illuminate\Foundation\Http\FormRequest;

class BankAccountRequest extends FormRequest
{
    protected array $rules = [
        'bank_account_name_id'      => 'required|numeric|exists:bank_account_names,id',
        'user_id'                   => 'sometimes|nullable|numeric|exists:users,id',
        'account_number'            => 'required|numeric',
        'iban'                      => 'required|numeric',
        'disc'                      => 'sometimes|nullable|string',
        'is_default'                => 'sometimes|nullable|numeric',
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
