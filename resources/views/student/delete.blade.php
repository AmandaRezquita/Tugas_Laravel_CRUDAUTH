@extends('layouts.main')

@section('content')
    <h1>Delete Student</h1>

    <p>Are you sure you want to delete this student?</p>

    <form method="post" action="{{ route('students.destroy', ['id' => $student->id]) }}">
        @csrf
        @method('DELETE')

        <button type="submit">Yes, Delete</button>
    </form>

    <a href="{{ route('students.show', ['student' => $student->id]) }}">Cancel</a>
@endsection
