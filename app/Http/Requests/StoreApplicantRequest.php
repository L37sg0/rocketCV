<?php

namespace App\Http\Requests;

use App\Models\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreApplicantRequest extends AbstractApplicantRequest
{


    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array|\Illuminate\Contracts\Validation\ValidationRule[]|\mixed[][]|string[]
     */
    public function rules(): array
    {
        $rules = $this->getRules();
        unset($rules[self::FIELD_ID]);
        return $rules;
    }
}
