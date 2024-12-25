<?php

namespace App\Http\Requests\Api\Users;

use App\Http\Requests\Api\APIRequest;

class UserExistRequest extends APIRequest
{
    protected array $rules = [
        'email'             => 'required|email|exists:users,email',
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
