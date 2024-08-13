@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $student->student_name }}" required>
        </div>

        <div class="mb-3">
            <label for="class_teacher_id" class="form-label">Class Teacher</label>
            <select class="form-select" id="class_teacher_id" name="class_teacher_id" required>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $student->class_teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="{{ $student->class }}" required>
        </div>

        <div class="mb-3">
            <label for="admission_date" class="form-label">Admission Date</label>
            <input type="date" class="form-control" id="admission_date" name="admission_date" value="{{ $student->admission_date }}" required>
        </div>

        <div class="mb-3">
            <label for="yearly_fees" class="form-label">Yearly Fees</label>
            <input type="number" class="form-control" id="yearly_fees" name="yearly_fees" value="{{ $student->yearly_fees }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Student</button>
    </form>
</div>
@endsection
