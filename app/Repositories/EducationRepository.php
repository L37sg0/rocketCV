<?php

namespace App\Repositories;

use App\Models\Education as Model;
use App\Models\EducationInterface;
use Illuminate\Database\Eloquent\Collection;

class EducationRepository implements EducationRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?EducationInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?EducationInterface
    {
        return Model::create($data);
    }

    public function update(EducationInterface $education): ?EducationInterface
    {
        $id = $education->getId();
        $data = [
            Model::FIELD_APPLICANT_ID               => $education->getApplicantId(),
            Model::FIELD_UNV_ID                     => $education->getUniversityId(),
            Model::FIELD_DATE_FROM                  => $education->getDateFrom(),
            Model::FIELD_DATE_TO                    => $education->getDateTo(),
            Model::FIELD_DEGREE                     => $education->getDegree(),
            Model::FIELD_SPECIALTY                  => $education->getSpecialty(),
            Model::FIELD_ACCREDITATION_ASSESSMENT   => $education->getAccreditationAssessment(),
        ];
        return Model::whereId($id)->update($data);
    }

    public function delete(EducationInterface $education): bool
    {
        $id = $education->getId();
        return Model::destroy($id);
    }
}
