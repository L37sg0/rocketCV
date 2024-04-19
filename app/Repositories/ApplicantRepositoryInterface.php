<?php

namespace App\Repositories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Collection;

interface ApplicantRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?Applicant;

    public function create(array $data): ?Applicant;

    public function update(int $id, array $data): ?Applicant;

    public function delete(int $id): bool;
}
