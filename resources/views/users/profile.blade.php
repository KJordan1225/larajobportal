@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="custom-container text-center">
        <!-- Row 1: Image -->
        <img src="logo-test.png" alt="Profile Image" class="custom-image">
        
        <!-- Row 2: Job Title -->
        <div class="mt-3">
            <h2>Keith Jordan</h2>
        </div>

        <!-- Row 2: Job Title -->
        <div class="mt-3">
            <h5>Laravel Developer</h5>
        </div>

        <!-- Row 3: Download CV Button -->
        <div class="mt-3">
            <a href="cv.pdf" class="custom-button">Download CV</a>
        </div>

        <!-- Row 4: Bio -->
        <div class="mt-3">
            <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Praesent euismod venenatis elit placerat consectetur luctus. Dictum praesent erat metus rutrum interdum vehicula ac neque. Cras placerat etiam lobortis interdum tempus vestibulum amet netus. Habitant cursus mollis vel euismod lacinia auctor scelerisque libero luctus. Primis litora rutrum et est iaculis euismod enim. Ornare bibendum velit elit diam mollis. Class odio nisi posuere facilisis id; natoque pretium sodales.</p>
        </div>
    </div>
</div>


@endsection