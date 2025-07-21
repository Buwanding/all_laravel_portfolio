@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center py-5" style="background-color: #f9fafb;">
    <div class="card shadow-sm border-0 rounded-lg d-flex flex-row p-4" style="max-width: 1000px;">
        
        <!-- Left: Image -->
        <div class="d-flex align-items-center justify-content-center px-3">
            <img src="{{ asset('images/profile.png') }}" alt="Profile" style="width: 220px; border-radius: 8px;">
        </div>

        <!-- Right: Text Content -->
        <div class="p-4">
            <h4 class="font-weight-bold mb-2">Welcome to <span class="text-primary">My Portfolio</span></h4>
            <p class="text-secondary mb-3">
                I am a passionate developer with experience in both front-end and back-end technologies. Here, you can explore my projects, skills, and the work I am proud to showcase.
            </p>
            <a href="#projects" class="btn btn-primary">View My Projects</a>
        </div>

    </div>
</div>
