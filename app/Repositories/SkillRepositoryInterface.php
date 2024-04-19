<?php

namespace App\Repositories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;

interface SkillRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?Skill;

    public function create(array $data): ?Skill;

    public function update(int $id, array $data): ?Skill;

    public function delete(int $id): bool;
}
