<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Http\Resources\Applicant\ApplicantCollection;
use App\Http\Resources\Applicant\ApplicantResource;
use App\Models\Applicant;
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
        return new ApplicantCollection($applicants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request)
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        $this->applicantRepository->update($request, $applicant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->applicantRepository->delete($id);
    }
}
