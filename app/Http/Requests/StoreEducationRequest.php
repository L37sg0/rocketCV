<?php

namespace App\Http\Requests;

class StoreEducationRequest extends AbstractEducationRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = $this->getRules();
        unset($rules[self::FIELD_ID]);
        return $rules;
    }
}
