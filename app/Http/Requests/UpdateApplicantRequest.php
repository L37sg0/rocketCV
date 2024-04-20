<?php

namespace App\Http\Requests;

class UpdateApplicantRequest extends AbstractApplicantRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }


    public function rules(): array
    {
        return [
            self::FIELD_ID          => [],
            self::FIELD_FIRST_NAME  => [],
            self::FIELD_MID_NAME    => [],
            self::FIELD_LAST_NAME   => [],
            self::FIELD_EMAIL       => [],
            self::FIELD_PHONE       => [],
            self::FIELD_GENDER      => [],
            self::FIELD_BIRTH_DATE  => [],
        ];
    }
}
