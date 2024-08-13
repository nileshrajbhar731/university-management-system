@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="jumbotron text-center bg-light p-4">
                    <h1 class="display-4">Welcome to the Student Management System</h1>
                    <p class="lead">Manage university students and teachers easily with this application.</p>
                    <hr class="my-4">
                    <p>Use the navigation bar to access different sections:</p>
                    <div class="btn-group">
                        <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">Manage Students</a>
                        <a class="btn btn-secondary btn-lg" href="{{ route('teachers.index') }}" role="button">Manage Teachers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
