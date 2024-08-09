@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="custom-container text-center">
        <!-- Row 1: Image -->
        <img src="{{ asset('assets/images/user_profile/'.$profile->image.'') }}" alt="Profile Image" class="custom-image">
        
        <!-- Row 2: Job Title -->
        <div class="mt-3">
            <h2>{{ $profile->name }}</h2>
        </div>

        <!-- Row 2: Job Title -->
        <div class="mt-3">
            <span class="profile-paragraph">{{ $profile->job_title }}</span>
        </div>

        <!-- Row 3: Download CV Button -->
        <div class="mt-3">
            <a href="{{ asset('assets/cv/'.$profile->cv.'') }}" class="custom-button">Download CV</a>
        </div>

        <!-- Row 4: Bio -->
        <div class="mt-3">
            <p class="profile-paragraph">{{ $profile->bio }}</p>
        </div>

        <!-- Row Update profile button -->
        <div class="mt-3">
            <a href="{{ route('user.display-update-profile') }}" class="custom-profile-button">Update Profile Info</a>
        </div>
    </div>
</div>


@endsection