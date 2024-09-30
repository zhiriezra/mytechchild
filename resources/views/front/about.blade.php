@extends('layouts.master')

@section('content')

 <!-- Breadcrumnd Banner Start -->
 <section class="breadcrumnd-banner cmn-bg overflow-hidden">
    <div class="container">
        <div class="breadcrumnd-wrapper">
            <div class="breadcrumnd-content">
                <h1 class="black mb-lg-4 mb-md-3 mb-2">
                    About Us
                </h1>
                <ul class="bread-list d-flex align-items-center gap-lg-4 gap-md-3 gap-2">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
            <div class="breadcrumnd-thumb position-relative">
                <img src="{{ asset('ascent/assets/img/abanner/bread-thumb.png') }}" alt="img" class="mimg">
                <img src="{{ asset('ascent/assets/img/abanner/bread-child.png') }}" alt="img" class="bread-child">
                <img src="{{ asset('ascent/assets/img/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumnd Banner Start -->

<!-- Aboutv1 Section Start -->
<section class="about-sectionv1 space-top overflow-hidden space-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-one-thumbs">
                    <div class="thumbs position-relative wow fadeInUp" data-wow-delay="1200">
                        <img src="{{ asset('ascent/assets/img/about/about-1.png') }}" alt="img" class="round10 main-img">
                        <div class="customer-satisfaction">
                            <div class="icon d-center">
                                <img src="{{ asset('ascent/assets/img/abanner/customer.png') }}" alt="img">
                            </div>
                            <div class="cont">
                                <h4 class="white">
                                    5,000+
                                </h4>
                                <p class="white">
                                    Satisfied Clients
                                </p>
                            </div>
                        </div>
                        <!-- Element -->
                        <img src="{{ asset('ascent/assets/img/about/lighing-cmn.png') }}" alt="img" class="about-light1">
                        <img src="{{ asset('ascent/assets/img/about/arrows-cmn.png') }}" alt="img" class="about-arrows">
                    </div>
                    <div class="about-one-grow">
                        <div class="academy-box text-center mb-30 wow fadeInUp" data-wow-delay="1400">
                            <img src="{{ asset('ascent/assets/img/about/grow.png') }}" alt="img">
                            <h4 class="black">
                                Academy
                            </h4>
                            <p class="pra">
                                Learning Ladder School
                            </p>
                        </div>
                        <div class="academy-box2 gra-border round10 wow fadeInUp" data-wow-delay="1600">
                            <div class="content">
                                <h3>
                                    <span class="count">5</span>+
                                </h3>
                                <p>years of experiences</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-contentv1 ps-xxl-5">
                    <div class="section-title mb-60">
                        <span class="sub-title wow fadeInUp p5-clr">
                            About Us
                        </span>
                        <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                            Unlock Your Child's Potentials!
                        </h3>
                        <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                            Welcome to Tech Child, where we are dedicated to empowering the next generation through the exciting world of technology. Our mission is to make coding and digital creativity accessible, engaging, and fun for kids of all ages. At Tech Child, we believe that every child has the potential to be a creator, innovator, and problem-solver, and we’re here to guide them every step of the way.
                        </p>
                        <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                            We offer a variety of coding and digital design courses specifically tailored for young minds. Our expert instructors are more than just teachers—they're mentors who inspire and nurture creativity. With a curriculum that seamlessly blends fun with learning, we aim to make technology an adventure, whether through coding, game design, or digital art.
                        </p>
                        <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                            Our hands-on, interactive approach ensures that each child learns by doing, building practical skills that will serve them well into the future. At Tech Child, we focus not just on technical proficiency, but also on fostering critical thinking and creativity. Whether your child is just starting out or already has some experience, we have a program designed to help them grow and thrive.
                        </p>
                        <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                            Join us at Tech Child, and watch your child’s ideas come to life through technology. Together, we’re building a future where every child is empowered to be a digital creator
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
