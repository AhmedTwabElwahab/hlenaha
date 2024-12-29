<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends APIRequest
{
    protected array $rules = [
        'user_id'            => 'sometimes|nullable|numeric',
        'key'                => 'sometimes|nullable|string', //exists:settings,key
        'value'              => 'sometimes|nullable|string',

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

