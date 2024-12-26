<?php

namespace App\Http\Requests\web;


use App\Http\Requests\Api\APIRequest;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    protected array $rules = [
        'type'                  => 'sometimes|nullable|string',
        'brand'                 => 'sometimes|nullable|string',
        'model'                 => 'sometimes|nullable|string',
        'year'                  => 'sometimes|nullable|string',
        'color'                 => 'sometimes|nullable|string',
        'price_day'             => 'required|numeric',
        'kilo'                  => 'required|numeric',
        'insurance'             => 'sometimes|nullable|string',
        'insurance_expiry'      => 'sometimes|nullable|date',
        'description'           => 'sometimes|nullable|string',
        'status'                => 'sometimes|nullable|numeric',

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
