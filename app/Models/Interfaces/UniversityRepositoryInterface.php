<?php

namespace App\Models\Interfaces;

use App\Models\University;
use Illuminate\Database\Eloquent\Collection;

interface UniversityRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?University;

    public function create(array $data): ?University;

    public function update(int $id, array $data): ?University;

    public function delete(int $id): bool;
}
