<?php

namespace App\Repositories;

use App\Models\EducationInterface;
use Illuminate\Database\Eloquent\Collection;

interface EducationRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?EducationInterface;

    public function create(array $data): ?EducationInterface;

    public function update(EducationInterface $education): ?EducationInterface;

    public function delete(EducationInterface $education): bool;
}
