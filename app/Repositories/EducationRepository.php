<?php

namespace App\Repositories;

use App\Models\Education as Model;
use Illuminate\Database\Eloquent\Collection;

class EducationRepository implements EducationRepositoryInterface
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
