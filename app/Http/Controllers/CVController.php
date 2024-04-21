<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Models\Applicant;
use App\Repositories\ApplicantRepositoryInterface;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cvs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cvs.new-or-edit');
    }

//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(StoreApplicantRequest $request)
//    {
//        //
//    }

//    /**
//     * Display the specified resource.
//     */
//    public function show(int $id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        return view('cvs.new-or-edit', compact('applicant'));
    }

//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(UpdateApplicantRequest $request, Applicant $applicant)
//    {
//        //
//    }

//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(int $id)
//    {
//        //
//    }
}
