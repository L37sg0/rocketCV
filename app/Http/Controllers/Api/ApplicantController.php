<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\ApplicantDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Http\Resources\Applicant\ApplicantResourceCollection;
use App\Http\Resources\Applicant\ApplicantResource;
use App\Repositories\ApplicantRepositoryInterface;

class ApplicantController extends Controller
{
    public function __construct(
        private readonly ApplicantRepositoryInterface $applicantRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicants = $this->applicantRepository->getAll();
        return new ApplicantResourceCollection($applicants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request)
    {
        $data = ApplicantDTO::fromRequest($request)->toArray();
        $this->applicantRepository->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $applicant = $this->applicantRepository->getById($id);
        return new ApplicantResource($applicant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantRequest $request)
    {
        $data = ApplicantDTO::fromRequest($request)->toArray();
        $id = $request->get('id');
        $this->applicantRepository->update($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->applicantRepository->delete($id);
    }
}
