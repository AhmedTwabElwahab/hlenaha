<?php

namespace App\Http\Requests\web;


use App\Http\Requests\Api\APIRequest;
use Illuminate\Foundation\Http\FormRequest;

class BankAccountRequest extends FormRequest
{
    protected array $rules = [
        'account_name'      => 'required|string',
        'driver_id'         => 'required|numeric|exists:drivers,id',
        'user_id'           => 'required|numeric|exists:users,id',
        'account_number'    => 'required|numeric',
        'iban'              => 'required|numeric',
        'disc'              => 'required|string',
        'is_default'        => 'required|numeric',
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
