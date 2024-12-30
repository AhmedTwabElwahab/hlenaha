<?php

namespace App\Http\Requests\Api;

class UserRestPasswordRequest extends APIRequest
{
    protected array $rules = [
        'current_password'     => 'required',
        'password'             => 'required|min:8',
    ];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->rules;
    }
}
