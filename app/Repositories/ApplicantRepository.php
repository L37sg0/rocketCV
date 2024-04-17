<?php

namespace App\Repositories;

use App\Interfaces\ApplicantRepositoryInterface;
use App\Models\Applicant as Model;
use Illuminate\Database\Eloquent\Collection;

class ApplicantRepository implements ApplicantRepositoryInterface
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
