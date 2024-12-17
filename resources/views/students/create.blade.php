@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Add a student profile
            </h2>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <form action="{{ route('students.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                  <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="lname" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="courses" class="form-label">Select Course</label>
                    <select name="courses" id="courses" class="form-select">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->courseName }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection