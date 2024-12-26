<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
{
    protected array $rules = [
        'driver_id'         => 'required|numeric',
        'car_id'            => 'required|numeric',
        'date_start'        => 'required|date',
        'kilo_start'        => 'required|numeric',
        'date_end'          => 'sometimes|nullable|date',
        'kilo_end'          => 'sometimes|nullable|numeric',
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
