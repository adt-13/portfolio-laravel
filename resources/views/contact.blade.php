@extends('layouts.app')

@section('title', 'Contact | Adity Portfolio')

@section('content')
<section class="page-section">
    <h1 class="page-title">Contact</h1>
    <p class="page-intro">
        Feel free to reach out if you want to collaborate, ask a question, or just say hello.
    </p>

    <div class="two-column">
        <div>
            <h2 class="section-heading">Contact Details</h2>
            <p>Email: <a href="mailto:adt13abdullah@gmail.com">adt13abdullah@gmail.com</a></p>
            <p>GitHub: <a href="#" target="_blank">https://github.com/adt-13</a></p>
            <p>LinkedIn: <a href="#" target="_blank">https://www.linkedin.com/in/adityabdullah/</a></p>
            <p class="small-text">
                You can also use the form and I’ll get back to you as soon as possible.
            </p>
        </div>

        <form id="contact-form" class="form-card">
            <div class="form-row">
                <label for="name">Name</label>
                <input id="name" type="text" required placeholder="Your name">
            </div>

            <div class="form-row">
                <label for="email">Email</label>
                <input id="email" type="email" required placeholder="Your email">
            </div>

            <div class="form-row">
                <label for="message">Message</label>
                <textarea id="message" rows="4" required placeholder="Write your message..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary full-width">Send Message</button>
            <p class="small-text">* This is a demo form. You can connect it to Laravel mail later.</p>
        </form>
    </div>
</section>
@endsection
