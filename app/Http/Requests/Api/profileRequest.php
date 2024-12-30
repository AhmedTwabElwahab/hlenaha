<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends APIRequest
{
    protected array $rules = [
        'name'              => 'sometimes|nullable|string',
        'phone'             => 'sometimes|nullable|string',
        'gender'            => 'sometimes|nullable|string',
        'birth_date'        => 'sometimes|nullable|date',
        'email'             => 'sometimes|nullable|email|string',
        'password'          => 'required|min:4',
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
        $this->rules['password'] = 'sometimes|nullable|min:4';
        $this->rules['phone']    = 'sometimes|nullable|min:4';

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
