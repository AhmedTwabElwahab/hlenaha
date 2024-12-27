<?php

namespace App\Http\Requests\web;


use Illuminate\Foundation\Http\FormRequest;

class UserRestPasswordRequest extends FormRequest
{
    protected array $rules = [
        'current_password'     => 'required',
        'password'             => 'required|min:8|confirmed',
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
