@extends('layouts.app')

@section('content')

<h1>
    Courses
</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Instructor</th>
            <th>Course Head</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->title}}</td>
            <td>{{$course->instructor}}</td>
            <td>{{$course->courseHead}}</td>
            <td>
                <a href="{{ route('course.show', $course->id) }}">View</a>
                <a href="{{ route('course.edit', $course->id) }}">Edit</a>
                <form method="post" action="{{ route('course.destroy', $course->id) }}">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection