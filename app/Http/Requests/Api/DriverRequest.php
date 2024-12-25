<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends APIRequest
{
    protected array $rules = [
        'name'              => 'required|string',
        'id_number'         => 'required|numeric',
        'phone'             => 'required|string',
        'country'           => 'sometimes|nullable|string',
        'city'              => 'sometimes|nullable|string',
        'district'          => 'sometimes|nullable|string',
        'street'            => 'sometimes|nullable|string',
        'image'             => 'sometimes|nullable|string',
        'national_address_image'            => 'sometimes|nullable|string',
        'building_number'   => 'sometimes|nullable|numeric',
        'postal_code'       => 'sometimes|nullable|numeric|max:5',
        'balance'           => 'sometimes|nullable|numeric',
        'user_id'           => 'required|numeric',
        'status'            => 'required|bool',

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
