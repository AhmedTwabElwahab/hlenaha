<?php

namespace App\Http\Requests\Api;

class SocialLoginRequest extends APIRequest
{
    protected array $rules = [
        'access_token'      => 'required|string',
        'provider'          => 'required|string',
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
