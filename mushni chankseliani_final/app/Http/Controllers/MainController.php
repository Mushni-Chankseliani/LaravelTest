<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function getInfo(Request $request) {

        $classrooms = Classroom::select(DB::raw('id, course_name, room_name'))->withCount('students')->get();
        $students = Student::select(DB::raw('id, name, lastname, address, classroom_id'))
            ->when($request->input('name'), function ($query) use ($request) {
                $query->where('name', 'like', $request->input('name') . '%');
            })
        ->get();
        return view('main', ['classrooms' => $classrooms, 'students' => $students]);
    }

    public function getStudents() {
        return view('main');
    }


}
