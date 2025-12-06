@extends('layouts.app')

@section('title', 'Skills | Adity Portfolio')

@section('content')
<section class="page-section">
    <h1 class="page-title">Skills</h1>
    <p class="page-intro">
        My strengths are in neural networks and embedded machine learning, with course-level
        experience in web technologies used to build this portfolio.
    </p>

    <div class="three-column">
        {{-- AI & ML --}}
        <div class="card">
            <h2>AI & Machine Learning</h2>
            <ul class="skills-list">
                <li>Artificial Neural Networks (ANN)</li>
                <li>Spiking Neural Networks (SNN)</li>
                <li>Classification & recommendation models</li>
                <li>TF-IDF, Cosine Similarity, basic feature engineering</li>
                <li>Model evaluation (accuracy, latency, etc.)</li>
                <li>Python for data and ML (NumPy / pandas / scikit-learn)</li>
            </ul>
        </div>

        {{-- Embedded / Edge AI --}}
        <div class="card">
            <h2>Embedded & Edge ML</h2>
            <ul class="skills-list">
                <li>ESP32-S3 microcontroller (TinyML / Edge AI)</li>
                <li>ESP-IDF development workflow</li>
                <li>TensorFlow Lite Micro deployment</li>
                <li>Quantized CNN models (e.g., MobileNetV2)</li>
                <li>Working with sensors & cameras (OV2640)</li>
                <li>Understanding of memory, power, and latency constraints</li>
            </ul>
        </div>

        {{-- Tools & Web (course level) --}}
        <div class="card">
            <h2>Tools & Web (Coursework)</h2>
            <ul class="skills-list">
                <li>Python, Jupyter Notebook, VS Code</li>
                <li>Git & GitHub for version control</li>
                <li>Streamlit for quick ML dashboards</li>
                <li>HTML, CSS, JavaScript (basic)</li>
                <li>Laravel & Blade templates (course project)</li>
            </ul>
        </div>
    </div>
</section>
@endsection
