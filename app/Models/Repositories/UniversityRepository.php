<?php

namespace App\Models\Repositories;

use App\Models\Interfaces\UniversityRepositoryInterface;
use App\Models\University as Model;
use Illuminate\Database\Eloquent\Collection;

class UniversityRepository implements UniversityRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?Model
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?Model
    {
        return Model::create($data);
    }

    public function update(int $id, array $data): ?Model
    {
        return Model::whereId($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Model::destroy($id);
    }
}
