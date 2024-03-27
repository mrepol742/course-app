@extends('layouts.app')

@section('content')

<h1>Title: {{$course->title}}</h1>
<p>Instructor: {{$course->instructor}}</p>
<p>Course Head: {{$course->courseHead}}</p>

@endsection