<?php

namespace App\Repositories;

use App\Models\ApplicantInterface;
use Illuminate\Database\Eloquent\Collection;

interface ApplicantRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?ApplicantInterface;

    public function create(array $data): ?ApplicantInterface;

    public function update(ApplicantInterface $applicant): ?ApplicantInterface;

    public function delete(ApplicantInterface $applicant): bool;
}
