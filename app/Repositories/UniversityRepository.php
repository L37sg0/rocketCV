<?php

namespace App\Repositories;

use App\Models\University as Model;
use App\Models\UniversityInterface;
use Illuminate\Database\Eloquent\Collection;

class UniversityRepository implements UniversityRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?UniversityInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?UniversityInterface
    {
        return Model::create($data);
    }

    public function update(UniversityInterface $university): ?UniversityInterface
    {
        $id = $university->getId();
        $data = [];
        return Model::whereId($id)->update($data);
    }

    public function delete(UniversityInterface $university): bool
    {
        $id = $university->getId();
        return Model::destroy($id);
    }
}
