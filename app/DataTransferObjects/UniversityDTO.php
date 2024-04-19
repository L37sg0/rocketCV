<?php

namespace App\DataTransferObjects;

use Illuminate\Http\Request;

class UniversityDTO
{
    private const FIELD_NAME = 'name';

    private string $name;

    private function __construct(array $data)
    {
        $this->name = $data[self::FIELD_NAME];
    }

    public static function fromRequest(Request $request): static
    {
        $data = $request->all();
        return new self($data);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
