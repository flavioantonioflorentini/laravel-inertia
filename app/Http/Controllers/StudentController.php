<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Section;
use App\Http\Resources\StudentResource;
use App\Http\Resources\ClassesResource;
use App\Http\Resources\SectionResource;

class StudentController extends Controller
{
    public function index()
    {
        //PostResource::collection(Post::all())
        $students = StudentResource::collection(Student::all());
        $classes = ClassesResource::collection(Classes::all());
        $sections = SectionResource::collection(Section::all());
        return inertia('Student/Index', [
            'students' => $students,
            'classes' => $classes,
            'sections' => $sections
        ]);
    }
/*
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->validated());
        return new StudentResource($student);
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->validated());
        return new StudentResource($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->noContent();
    }*/
}
