<?php

namespace App\Repositories;

use App\Models\Applicant as Model;
use App\Models\ApplicantInterface;
use Illuminate\Database\Eloquent\Collection;

class ApplicantRepository implements ApplicantRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?ApplicantInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?ApplicantInterface
    {
        return Model::create($data);
    }

    public function update(ApplicantInterface $applicant): ?ApplicantInterface
    {
        $id = $applicant->getId();
        $data = [
            Model::FIELD_FIRST_NAME => $applicant->getFirstName(),
            Model::FIELD_MID_NAME   => $applicant->getMidName(),
            Model::FIELD_LAST_NAME  => $applicant->getLastName(),
            Model::FIELD_EMAIL      => $applicant->getEmail(),
            Model::FIELD_PHONE      => $applicant->getEmail(),
            Model::FIELD_GENDER     => $applicant->getGender(),
            Model::FIELD_BIRTH_DATE => $applicant->getBirthDate(),
        ];
        /** @var ApplicantInterface $applicant */
        $applicant = Model::whereId($id)->update($data);
        return $applicant;
    }

    public function delete(ApplicantInterface $applicant): bool
    {
        $id = $applicant->getId();
        return Model::destroy($id);
    }
}
