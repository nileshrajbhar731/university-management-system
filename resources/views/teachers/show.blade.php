@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Teacher Details</h1>
    <p><strong>Name:</strong> {{ $teacher->name }}</p>
    <p><strong>Subject:</strong> {{ $teacher->subject }}</p>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
