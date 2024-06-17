<!-- resources/views/about-us.blade.php -->
<title>RUMPC | About Us</title>

@extends('layouts.app')
@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('home/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">About Us</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="page-content pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Our Story</h2><!-- End .title -->
                    At RUMPC, we believe that technology is a powerful tool that can transform lives and businesses. Since our founding in 2010, we have dedicated ourselves to providing top-quality PCs and components to meet the needs of gamers, professionals, and everyday users alike. Our mission is simple: to make high-performance computing accessible to everyone, while delivering unparalleled customer service and support.
                    <p>Our story began with a shared passion for technology and a vision to create a company that puts the customer first. What started as a small team of tech enthusiasts in a modest workshop has grown into a leading PC supplier known for quality, reliability, and innovation. Over the years, RUMPC has built a reputation for excellence by continuously pushing the boundaries of what's possible in the world of computing.</p>
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <img src="https://i.pinimg.com/564x/a5/4a/39/a54a395c9c97e031e72cfbdbd07e0759.jpg" alt="About Us" class="img-fluid">
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="row pt-5">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box text-center">
                        <i class="icon-laptop feature-icon"></i>
                        <h3 class="feature-title">Our Mission</h3>
                        <p>At RUMPC, our mission is to provide cutting-edge PC solutions that empower individuals and businesses to reach their full potential.</p>
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box text-center">
                        <i class="icon-heart feature-icon"></i>
                        <h3 class="feature-title">Our Values</h3>
                        <p>Quality, Customer Focus, Innovation, Integrity, and Community are the pillars of RUMPC. We are committed to delivering top-notch products and exceptional service.</p>
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box text-center">
                        <i class="icon-star feature-icon"></i>
                        <h3 class="feature-title">Our Vision</h3>
                        <p>Our vision at RUMPC is to be the leading provider of high-performance PC solutions, driving innovation and empowering our customers to succeed in a rapidly evolving digital world.

                        </p>
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->

            <div class="row pt-5">
                <div class="col-lg-12">
                    <h2 class="title text-center">Meet Our Team</h2><!-- End .title -->

                    <div class="team-carousel owl-carousel owl-theme" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 30,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    }
                                }
                            }'>
                        <div class="team-member text-center">
                            <img src="home/assets/images/team/member-1.jpg" alt="Team Member" class="img-fluid">
                            <h4 class="team-member-name">John Doe</h4>
                            <p class="team-member-position">CEO</p>
                        </div><!-- End .team-member -->

                        <div class="team-member text-center">
                            <img src="home/assets/images/team/member-2.jpg" alt="Team Member" class="img-fluid">
                            <h4 class="team-member-name">Jane Doe</h4>
                            <p class="team-member-position">COO</p>
                        </div><!-- End .team-member -->

                        <div class="team-member text-center">
                            <img src="home/assets/images/team/member-3.jpg" alt="Team Member" class="img-fluid">
                            <h4 class="team-member-name">Michael Smith</h4>
                            <p class="team-member-position">CTO</p>
                        </div><!-- End .team-member -->

                        <div class="team-member text-center">
                            <img src="home/assets/images/team/member-1.jpg" alt="Team Member" class="img-fluid">
                            <h4 class="team-member-name">Emily Johnson</h4>
                            <p class="team-member-position">CFO</p>
                        </div><!-- End .team-member -->
                    </div><!-- End .team-carousel owl-carousel owl-theme -->
                </div><!-- End .col-lg-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection