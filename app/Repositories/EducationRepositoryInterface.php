<?php

namespace App\Repositories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Collection;

interface EducationRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?Education;

    public function create(array $data): ?Education;

    public function update(int $id, array $data): ?Education;

    public function delete(int $id): bool;
}
