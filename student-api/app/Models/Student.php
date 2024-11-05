<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public static function getAllStudents()
    {
        $students = DB::select('select * from students');
        return $students;
    }

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jurusan'
    ];
}