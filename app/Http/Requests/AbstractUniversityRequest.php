<?php

namespace App\Http\Requests;

use App\Models\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

abstract class AbstractUniversityRequest extends FormRequest
{
    public const FIELD_ID   = 'id';
    public const FIELD_NAME = 'name';

    protected function getRules(): array
    {

        return [
            self::FIELD_ID      => ['required', 'numeric', 'exists:universities,' . self::FIELD_ID],
            self::FIELD_NAME    => ['required', 'string', 'max:100'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public abstract function authorize(): bool;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public abstract function rules(): array;
}
