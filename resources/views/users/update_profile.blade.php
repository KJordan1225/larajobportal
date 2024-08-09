@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Update Profile</h2>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.profile-update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Name Textfield -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
        </div>

        <!-- Job Title Textfield -->
        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title', $user->job_title) }}">
        </div>

        <!-- CV Textfield -->
        <div class="form-group">
            <label for="cv">CV</label>
            <input type="text" class="form-control" id="cv" name="cv" value="{{ old('cv', $user->cv) }}">
        </div>

        <!-- Bio Textarea -->
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="4" >{{ old('bio', $user->bio) }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection