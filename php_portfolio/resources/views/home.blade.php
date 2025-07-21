@extends('layouts.app')

@section('content')
<div class="container hero">
    <h1>Hi, I'm <span>Aladdin</span></h1>
    <h5 class="text-secondary mb-4">Web Developer</h5>
    <a href="#contact" class="btn-contact">Contact</a>
    <div class="mt-4">
        <img src="{{ asset('images/profile.png') }}" alt="Aladdin">
    </div>
</div>
@endsection
