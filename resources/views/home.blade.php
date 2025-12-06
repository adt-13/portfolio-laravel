@extends('layouts.app')

@section('title', 'Home | Adity Portfolio')

@section('content')
<section class="hero">
    <div class="hero-text">
        <p class="hero-tag">Artificial Neural Networks · Spiking Neural Networks · Embedded AI</p>

        <h1>Hi, I’m <span>Adity Abdullah</span></h1>

        <p class="hero-subtitle">
            I work with artificial neural networks (ANNs) and spiking neural networks (SNNs),
            with a special focus on deploying intelligent models on low-power hardware like the ESP32-S3.
            This portfolio site is part of my web engineering coursework and a place to showcase my AI and
            embedded ML projects.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('projects') }}" class="btn btn-primary">View Projects</a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Contact Me</a>
        </div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/adity.jpg') }}" alt="Photo of Adity Abdullah">
    </div>
</section>
@endsection
