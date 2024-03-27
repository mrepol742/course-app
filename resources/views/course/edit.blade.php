@extends('layouts.app')

@section('content')

<h1>Edit Course</h1>
<form method="post" action="{{ route('course.update', $course->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Course Title</label>
        <input type="text" name="title" value="{{ $course->title }}" required>
    </div>
    <div>
        <label for="instructor">Course Instructor</label>
        <input type="text" name="instructor" value="{{ $course->instructor }}" required>
    </div>
    <div>
        <label for="courseHead">Course Head</label>
        <input type="text" name="courseHead" value="{{ $course->courseHead }}" required>
    </div>
    <button type="submit">Edit</button>
</form>

@endsection