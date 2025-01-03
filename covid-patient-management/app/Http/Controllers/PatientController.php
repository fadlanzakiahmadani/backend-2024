<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Http\Response;

class PatientController extends Controller
{
// CRUD methods: index(), store(), show(), update(), destroy()
    public function index()
{
    $patients = Patient::all();
    return response()->json([
        'message' => 'Patients retrieved successfully',
        'data' => $patients
    ]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'nik' => 'required|string|size:16|unique:patients,nik',
        'gender' => 'required|in:male,female',
        'birth_date' => 'required|date',
        'status' => 'required|in:positive,recovered,deceased',
    ]);

    $patient = Patient::create($validated);

    return response()->json([
        'message' => 'Patient created successfully',
        'data' => $patient
    ], Response::HTTP_CREATED);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $patient = Patient::find($id);

    if (!$patient) {
        return response()->json([
            'message' => 'Patient not found'
        ], Response::HTTP_NOT_FOUND);
    }

    return response()->json([
        'message' => 'Patient retrieved successfully',
        'data' => $patient
    ]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $patient = Patient::find($id);

    if (!$patient) {
        return response()->json([
            'message' => 'Patient not found'
        ], Response::HTTP_NOT_FOUND);
    }

    $validated = $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'nik' => 'sometimes|required|string|size:16|unique:patients,nik,' . $id,
        'gender' => 'sometimes|required|in:male,female',
        'birth_date' => 'sometimes|required|date',
        'status' => 'sometimes|required|in:positive,recovered,deceased',
    ]);

    $patient->update($validated);

    return response()->json([
        'message' => 'Patient updated successfully',
        'data' => $patient
    ]);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $patient = Patient::find($id);

    if (!$patient) {
        return response()->json([
            'message' => 'Patient not found'
        ], Response::HTTP_NOT_FOUND);
    }

    $patient->delete();

    return response()->json([
        'message' => 'Patient deleted successfully'
    ]);
}

}
