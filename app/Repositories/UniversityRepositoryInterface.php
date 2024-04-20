<?php

namespace App\Repositories;

use App\Models\UniversityInterface;
use Illuminate\Database\Eloquent\Collection;

interface UniversityRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?UniversityInterface;

    public function create(array $data): ?UniversityInterface;

    public function update(UniversityInterface $university): ?UniversityInterface;

    public function delete(UniversityInterface $university): bool;
}
