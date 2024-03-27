<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index() {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create() {
        return view('course.create');
    }

    public function store(Request $request) {
        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show($id) {
        $course = Course::find($id);
        return view('course.show', compact('course'));
    }

    public function edit($id) {
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id) {
        Course::find($id)->update($request->all());
        return redirect()->route('course.index');
    }

    public function destroy($id) {
        Course::find($id)->delete();
        return redirect()->route('course.index');
    }
}
