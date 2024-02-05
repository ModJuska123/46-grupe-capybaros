<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;              //is karto ideti requestai
use App\Http\Requests\UpdateStudentRequest;              //....
use Illuminate\Http\Requests;              //....

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', [
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');  //taskas lygtai atitinka slesa /
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        Student::create($request->all());

        return redirect()->route('students-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->all());

        return redirect()->route('students-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Student $student)
    {
        return view('students.delete', [
            'student'=>$student,
        ]);
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->update();
        return redirect()->route('students-index');
        //
    }
}
