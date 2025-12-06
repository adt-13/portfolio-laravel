@extends('layouts.app')

@section('title', 'Projects | Adity Portfolio')

@section('content')
<section class="page-section">
    <h1 class="page-title">Projects</h1>
    <p class="page-intro">
        A snapshot of the AI and embedded ML projects I have built or am currently developing.
    </p>

    <div class="card-grid">
        {{-- 1. Movie recommendation system --}}
        <article class="card">
            <h2>Content-Based Movie Recommendation System</h2>
            <p>
                A content-based movie recommender built in Python for an AI course. The system
                uses <strong>TF-IDF</strong> features and <strong>Cosine Similarity</strong> on the
                MovieLens dataset to recommend movies with similar genres and descriptions.
                The web interface is implemented in <strong>Streamlit</strong>, and movie posters are
                fetched in real time from the <strong>TMDB API</strong> to create an interactive
                user experience.
            </p>
            <p class="card-tech">
                Tech: Python, pandas, scikit-learn, Streamlit, MovieLens, TMDB API
            </p>
        </article>

        {{-- 2. Cardiac arrhythmia SNN vs ANN on ESP32-S3 (in progress) --}}
        <article class="card">
            <h2>Low-Power Cardiac Arrhythmia Detection on ESP32-S3 (SNN vs ANN)</h2>
            <p>
                An ongoing project to implement and evaluate a low-power, real-time cardiac
                arrhythmia detection system on an <strong>ESP32-S3</strong> microcontroller.
                The goal is to deploy a <strong>Spiking Neural Network (SNN)</strong> model and
                compare it with a conventional <strong>ANN baseline</strong> in terms of accuracy,
                latency, memory footprint, and energy consumption. This work explores how far
                neuromorphic-inspired models can go on tiny devices for medical monitoring.
            </p>
            <p class="card-tech">
                Tech: SNN & ANN models, ESP32-S3, embedded ML, Python, microcontroller deployment
            </p>
        </article>

        {{-- 3. Continual/continuous learning on ESP32-S3 --}}
        <article class="card">
            <h2>Continual Learning Image Classifier on ESP32-S3</h2>
            <p>
                A project focused on implementing a baseline multi-class image classifier on an
                <strong>ESP32-S3</strong> with an <strong>OV2640</strong> camera. The system uses a
                <strong>quantized MobileNetV2</strong> model (pre-trained on initial classes) and is
                developed with <strong>ESP-IDF</strong> and <strong>TensorFlow Lite Micro</strong>.
                The long-term goal is to study continuous learning on-device, allowing the classifier
                to gradually expand to new classes while respecting tight memory and energy budgets.
            </p>
            <p class="card-tech">
                Tech: ESP32-S3, OV2640 camera, ESP-IDF, TensorFlow Lite Micro, Quantized MobileNetV2
            </p>
        </article>
    </div>
</section>
@endsection
