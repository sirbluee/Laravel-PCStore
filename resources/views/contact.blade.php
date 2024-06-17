<title>RUMPC | Contact</title>
@extends('layouts.app')
@section('content')
<main class="main">
    <!-- Page Header -->
    <div class="page-header text-center" style="background: #f8f9fa; padding: 30px 0;">
        <div class="container">
            <h1 class="page-title">Contact Us<span>Get in Touch</span></h1>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="contact-info mb-4">
                    <h2 class="text-center mb-4">Our Address</h2>
                    <p class="text-center">123 Main Street, Anytown, USA</p>
                    <div class="text-center">
                        <p><i class="icon-phone"></i> Phone: (123) 456-7890</p>
                        <p><i class="icon-envelope"></i> Email: info@example.com</p>
                    </div>
                </div>

                <div class="map mb-4">
                    <iframe src="https://maps.google.com/maps?q=123%20Main%20Street,%20Anytown,%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2 class="text-center mb-4">Contact Form</h2>
                    <form action="{{ url('send-message') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Icon Boxes -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-rocket"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Payment & Delivery</h3>
                        <p>Free shipping for orders over $50</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-rotate-left"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Return & Refund</h3>
                        <p>Free 100% money back guarantee</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="icon-box icon-box-card text-center">
                    <span class="icon-box-icon">
                        <i class="icon-life-ring"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Quality Support</h3>
                        <p>Always online feedback 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
