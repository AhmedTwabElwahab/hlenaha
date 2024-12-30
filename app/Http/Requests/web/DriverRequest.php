<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
{
    protected array $rules = [
        'name'              => 'required|string',
        'email'             => 'required|email|unique:users,email',
        'id_number'         => 'required|numeric|unique:drivers,id_number',
        'phone'             => 'required|string|unique:users,phone',
        'country'           => 'sometimes|nullable|string',
        'city'              => 'sometimes|nullable|string',
        'district'          => 'sometimes|nullable|string',
        'street'            => 'sometimes|nullable|string',
        'image'             => 'sometimes|nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'national_address_image'            => 'sometimes|nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'building_number'   => 'sometimes|nullable|numeric',
        'postal_code'       => 'sometimes|nullable|numeric|min:5',
        'balance'           => 'sometimes|nullable|numeric',
        'user_id'           => 'sometimes|nullable|numeric',
        'status'            => 'sometimes|nullable|bool',
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
        $this->rules['user_id'] = 'sometimes|nullable|numeric';
        $this->rules['email']   = 'sometimes|nullable|email';
        $this->rules['id_number'] = 'sometimes|nullable|numeric|';
        $this->rules['phone'] = 'sometimes|nullable|numeric';
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
