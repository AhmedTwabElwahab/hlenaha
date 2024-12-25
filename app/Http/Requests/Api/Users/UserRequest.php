<?php

namespace App\Http\Requests\Api\Users;

use App\Http\Requests\Api\APIRequest;

class UserRequest extends APIRequest
{
    protected array $rules = [
        'username'          => 'required|string',
        'email'             => 'required|email|string',
        'password'          => 'required|min:4',
        'active'            => 'sometimes|nullable|numeric|between:0,1',
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
