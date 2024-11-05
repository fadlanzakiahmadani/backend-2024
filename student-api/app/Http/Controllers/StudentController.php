<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
      public function index() {
        // menampilkan data students dari database
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }
    public function store(Request $request) {

        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        // menampilkan data students dari database
        $students = Student::create($input);

        $data = [
            'message' => 'students is created succesfuly',
            'data' => $students
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);

        if ($student) {
            $input = [
                'nama' => $request->nama ?? $request->nama,
                'nim' => $request->nim ?? $request->nim, 
                'email' => $request->email ?? $request->email,
                'jurusan' => $request->jurusan ?? $request->jurusan,
            ];

            $student->update($input);

            $data = [
                'message' => 'Student is updated',
                'data' => $student,
            ];
            return response()->json($data, 200);
            
        } else {
            $data = [
                'message' => 'Data not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function destroy($id){
        $student = Student::find($id);

        if ($student) {
            $student->delete();

            $data = [
                'message' => 'Student is deleted'
            ];
            return response()->json($data, 200);

        } else {
            $data = [
                'message' => 'Data not found'
            ];
            return response()->json($data, 404);
        }
    }

    public function show($id){
        $student = student::find($id);

        if ($student){
            $data = [
                'message' => 'Get detail student',
                'data' => $student,
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                'message' => 'Student not found',
            ];
            return response()->json($data, 404);
        }
    }
}