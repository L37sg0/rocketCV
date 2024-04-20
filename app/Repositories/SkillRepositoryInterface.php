<?php

namespace App\Repositories;

use App\Models\SkillInterface;
use Illuminate\Database\Eloquent\Collection;

interface SkillRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?SkillInterface;

    public function create(array $data): ?SkillInterface;

    public function update(SkillInterface $skill): ?SkillInterface;

    public function delete(SkillInterface $skill): bool;
}
