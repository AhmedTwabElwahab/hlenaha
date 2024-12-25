<?php

namespace App\Http\Requests\Api\Users;

use App\Http\Requests\Api\APIRequest;

class UserRestPasswordRequest extends APIRequest
{
    protected array $rules = [
        'token'     => 'required',
        'email'     => 'required|email|exists:users,email',
        'password'  => 'required|min:8|confirmed',
    ];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return $this->rules;
    }
}
