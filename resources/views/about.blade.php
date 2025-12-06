@extends('layouts.app')

@section('title', 'About | Adity Portfolio')

@section('content')
<section class="page-section">
    <h1 class="page-title">About Me</h1>

    <div class="two-column">
        <div>
            <p>
                I am a student with a strong interest in artificial intelligence, neural networks,
                and embedded machine learning. Instead of focusing on traditional ML models,
                I enjoy working with <strong>ANNs</strong> and <strong>SNNs</strong>, and exploring how
                intelligent models can run efficiently on resource-constrained devices.
            </p>

            <p>
                Recently, my work has been centered around deploying and evaluating models on
                microcontrollers such as the <strong>ESP32-S3</strong>. I care about practical
                metrics like accuracy, latency, memory footprint, and energy consumption, and how
                they affect real-time applications such as cardiac arrhythmia detection.
            </p>

            <p>
                I am also interested in <strong>continuous / lifelong learning</strong> on edge
                devices – for example, enabling an image classifier running on a microcontroller to
                learn new classes over time without full retraining. Overall, my goal is to build
                robust and energy-efficient AI systems that can run close to the sensors in the real world.
            </p>
        </div>

        <div class="info-card">
            <h2 class="section-heading">Quick Info</h2>
            <ul class="info-list">
                <li><span>Full Name:</span> Adity Abdullah</li>
                <li><span>Focus:</span> ANN, SNN & Embedded AI</li>
                <li><span>Interests:</span> Edge ML, TinyML, Continual Learning</li>
                <li><span>Email:</span> adt13abdullah@gmail.com</li>
                <li><span>Based in:</span> Bangladesh</li>
            </ul>
        </div>
    </div>
</section>
@endsection
