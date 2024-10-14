@extends('layouts.master')

@section('content')

<!-- Hero Section Start -->
<section class="banner-section banner-1 overflow-hidden">
    <div class="container">
        <div class="banner-wrapperv1 position-relative">
            <div class="row justify-content-lg-between justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-5 order-lg-0 order-1">
                    <div class="banner-shape-thumb1">
                        <img src="{{ asset('ascent/assets/img/abanner/bn-v1-thumb1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-v1-content text-center">
                        <h1 class="wow fadeInDown" data-wow-delay=".6s">
                            <span class="title-explore position-relative wow fadeInRight d-inline-block" data-wow-delay=".4s">
                                <img src="{{ asset('ascent/assets/img/abanner/text-layer.png') }}" alt="img" class="text-layer">
                                Coding for Kids
                            </span>
                                Building Skills,
                            <span class="text-sount">
                                Building Dreams
                            </span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            We offer a variety of coding and digital design courses specifically tailored for young minds.
                        </p>
                        <a href="{{ route('about') }}" class="theme-btn p4-bg">
                            <span>
                                Learn More
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="banner-shape-thumb2">
                        <img src="{{ asset('ascent/assets/img/abanner/bn-v1-thumb2.png') }}" alt="img">
                    </div>
                </div>
            </div>
            <img src="{{ asset('ascent/assets/img/abanner/railbow.png') }}" alt="img" class="rainbow-shape">
        </div>
    </div>
    <!-- Element -->
    <img src="{{ asset('ascent/assets/img/abanner/left-ring.png') }}" alt="img" class="left-ring">
    <img src="{{ asset('ascent/assets/img/abanner/right-ring.png') }}" alt="img" class="right-ring">
    <img src="{{ asset('ascent/assets/img/abanner/upen-element.png') }}" alt="img" class="global-upen">
    <!-- Element -->
</section>

<!-- Talk Counter Section Start -->
<section class="talk-counter space-top overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="talk-content">
                    <div class="section-title mb-60">
                        <span class="sub-title wow fadeInUp p2-clr">
                            Number Talks
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Invest in education invest <br>
                            in the future
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Our expert instructors are more than just teachers—they're mentors who inspire and nurture creativity. With a curriculum that seamlessly blends fun with learning, we aim to make technology an adventure, whether through coding, game design, or digital art.
                        </p>
                        {{-- <a href="contact.html" class="theme-btn gra-border2">
                            <span class="black fw-medium">
                                Get a quote
                            </span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="counter-inner">
                    <div class="counter-talk-items gra-border round10 mb-30">
                        <div class="icon iconbg-v2">
                            <img src="{{ asset('ascent/assets/img/aicon/icon1.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">150</span>
                            </h3>
                            <p>Running Students</p>
                        </div>
                    </div>
                    <div class="counter-talk-items gra-border round10">
                        <div class="icon iconbg-v4">
                            <img src="{{ asset('ascent/assets/img/aicon/icon3.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">2</span>
                            </h3>
                            <p>Award Winning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="counter-inner">
                    <div class="counter-talk-items gra-border round10 mb-30">
                        <div class="icon iconbg-v3">
                            <img src="{{ asset('ascent/assets/img/aicon/icon2.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">500</span>
                            </h3>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div class="counter-talk-items gra-border round10">
                        <div class="icon iconbg-v5">
                            <img src="{{ asset('ascent/assets/img/aicon/icon4.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">25</span>
                            </h3>
                            <p>Parent/Guardian Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aboutv1 Section Start -->
<section class="about-sectionv1 space-top overflow-hidden space-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-one-thumbs">
                    <div class="thumbs position-relative wow fadeInUp" data-wow-delay="1200">
                        <img src="{{ asset('ascent/assets/img/about/about-1.png') }}" alt="img" class="round10 main-img">
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
            <div class="col-lg-5 col-md-6 col-sm-6">
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

                        <a href="{{ route('about') }}" class="theme-btn gra-border2">
                            <span class="black fw-medium">
                                Read More
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Service Details Section Start -->
 <section class="service-dtails overflow-hidden section-padding position-relative">
    <div class="container">

        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Our Popular Classes
            </h4>

            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                @foreach ($courses as $key => $course)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="{{ route('course.details', ['course' => $course->id]) }}">
                            <div class="details-thumb-middile w-100">
                                <img src="{{ asset('ascent/assets/img/aservices/details-middle1.png') }}" alt="img" class="w-100 round10">
                            </div>
                            <div class="mt-2">
                                <h5>Coding With Scratch</h5>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</section>

<!-- Testimonial V1 Section Start -->
<section class="testimonial-sectionv1 section-padding overflow-hidden white-bg">
    <div class="container">
        <div class="row g-2 justify-content-between mb-60">
            <div class="col-lg-4 col-md-5">
                <div class="section-title">
                    <span class="sub-title wow fadeInUp p5-clr">
                        Clients Testimonial
                    </span>
                    <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        Unlocking the Power of Wonderworks Child
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                See how our coding classes are making a difference in the lives of young learners. Read inspiring testimonials from parents and students who have achieved incredible results.
            </div>
        </div>
        <div class="testimonial-innerbox">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-7 col-sm-8">
                    <div class="swiper testimonial-slidewrap01">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item01">
                                    <div class="d-flex align-items-center justify-content-between gap-1">
                                        <div class="man-info d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('ascent/assets/img/atestimonial/testimonial-small.png') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h4 class="black mb-1">
                                                    Christian Franklin
                                                </h4>
                                                <span class="black fw-normal">
                                                    Parent
                                                </span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('ascent/assets/img/atestimonial/quote.png') }}" alt="img" class="quote-testi">
                                    </div>
                                    <p class="pra mt-24 mb-40">
                                        My son and daughter have already made their own simple games and projects. It’s amazing to see their progress, and they’re so proud of what they’ve created.
                                    </p>
                                    <div class="ratting-area d-flex align-items-center gap-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item01">
                                    <div class="d-flex align-items-center justify-content-between gap-1">
                                        <div class="man-info d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('ascent/assets/img/atestimonial/testimonial-small.png') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h4 class="black mb-1">
                                                    Oluchi Badmus
                                                </h4>
                                                <span class="black fw-normal">
                                                    Parent
                                                </span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('ascent/assets/img/atestimonial/quote.png') }}" alt="img" class="quote-testi">
                                    </div>
                                    <p class="pra mt-24 mb-40">
                                        As a parent with no coding experience, I wasn’t sure how to help my child. But the website provides easy guides and tips for parents too. It’s a win-win!
                                    </p>
                                    <div class="ratting-area d-flex align-items-center gap-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item01">
                                    <div class="d-flex align-items-center justify-content-between gap-1">
                                        <div class="man-info d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="{{ asset('ascent/assets/img/atestimonial/testimonial-small.png') }}" alt="">
                                            </div>
                                            <div class="cont">
                                                <h4 class="black mb-1">
                                                    Olarenwaju Idris
                                                </h4>
                                                <span class="black fw-normal">
                                                    Parent
                                                </span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('ascent/assets/img/atestimonial/quote.png') }}" alt="img" class="quote-testi">
                                    </div>
                                    <p class="pra mt-24 mb-40">
                                        It’s been amazing to watch my children bring their ideas to life through coding. They’ve already made their own projects, and seeing their sense of accomplishment is priceless!
                                    </p>
                                    <div class="ratting-area d-flex align-items-center gap-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<!-- Faq Section Start -->
{{-- <section class="faq-sectionv mt-60 overflow-hidden space-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 col-md-5">
                <div class="faq-thumbs">
                    <img src="{{ asset('ascent/assets/img/about/faq.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="faq-content">
                    <div class="section-title mb-40">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Some Faq
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Empowering Children Through Education Playful Mind
                        </h3>
                    </div>
                    <div class="tab-faq faq">
                        <div class="accordion-section d-grid gap-xxl-4 gap-lg-3 gap-2">
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        What are the prerequisites for this course?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            read content of a page when looking at its layout.
                                            Many desktop publish packages and web page editors now use Loremdefault
                                            model
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        What subjects will I learn in school?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            read content of a page when looking at its layout.
                                            Many desktop publish packages and web page editors now use Loremdefault
                                            model
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        How long is a school day?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            read content of a page when looking at its layout.
                                            Many desktop publish packages and web page editors now use Loremdefault
                                            model
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        What are the prerequisites course?
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            read content of a page when looking at its layout.
                                            Many desktop publish packages and web page editors now use Loremdefault
                                            model
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- professional Section Start -->
<section class="professional-sectionv1 overflow-hidden mt-2 space-bottom position-relative">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp p5-clr">
                        Meet Our Professional
                    </span>
                    <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        Expert Instructors & Educators
                    </h3>
                </div>
            </div>
        </div>
        <div class="row g-lg-4 g-3 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="professional-item">
                    <div class="thumb mb-24">
                        <img src="{{ asset('ascent/assets/img/aprotfolio/professonal1.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="mb-24">
                            <h4 class="mb-2">
                                <a href="#" class="black">
                                    Emmanuel
                                </a>
                            </h4>
                            <span>
                                {{-- Marketing Coordinator --}}
                            </span>
                        </div>
                        <div class="social-wrapper footer-social d-flex align-items-center">
                            <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                            <a href="#" class="white">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="professional-item">
                    <div class="thumb mb-24">
                        <img src="{{ asset('ascent/assets/img/aprotfolio/professonal2.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="mb-24">
                            <h4 class="mb-2">
                                <a href="#" class="black">
                                    Excel
                                </a>
                            </h4>
                            <span>
                                {{-- Marketing Coordinator --}}
                            </span>
                        </div>
                        <div class="social-wrapper footer-social d-flex align-items-center">
                            <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                            <a href="#" class="white">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="professional-item">
                    <div class="thumb mb-24">
                        <img src="{{ asset('ascent/assets/img/aprotfolio/professonal3.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="mb-24">
                            <h4 class="mb-2">
                                <a href="#" class="black">
                                    Nelson
                                </a>
                            </h4>
                            <span>
                                    {{-- Marketing Coordinator --}}
                            </span>
                        </div>
                        <div class="social-wrapper footer-social d-flex align-items-center">
                            <a href="#" class="white"><i class="white fab fa-facebook-f"></i></a>
                            <a href="#" class="white">
                                <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.55735 5.16157L10.5183 0.65625H9.57971L6.14039 4.56816L3.39341 0.65625H0.225098L4.37906 6.57174L0.225098 11.2963H1.16378L4.79579 7.16516L7.6968 11.2963H10.8651L6.55712 5.16157H6.55735ZM5.2717 6.62386L4.85082 6.03481L1.502 1.34768H2.94375L5.64629 5.13034L6.06717 5.71939L9.58015 10.6363H8.13839L5.2717 6.62409V6.62386Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="white"><i class="white fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="white"><i class="white fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Knowledge Section Start -->
<section class="knowledge-section cmn-bg space-top overflow-hidden space-bottom position-relative">
    <div class="container">
        <div class="row justify-content-md-between justify-content-center align-items-center g-4">
            <div class="col-lg-5 col-md-5 col-sm-10">
                <div class="knowledge-content">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp p5-clr">
                            Student knowledge
                        </span>
                        <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                            Knowledge for All learn design Excellence for Everyone
                        </h3>
                        <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit platea the osr of a proin mollis
                            pretium facilisi in, ligula
                            volutpat
                        </p>
                        <a href="about.html" class="theme-btn p3-bg py-3">
                            <span class="white fw-medium">
                                Learn More
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="knowledge-box-wrap">
                    <div class="knowledge-inner d-grid gap-xxl-4 gap-xl-3 gap-2">
                        <div class="knowledge-big-item d-center p1-bg">
                            <h2 class="white">
                                1-2
                                <span class="d-block">
                                    Years
                                </span>
                            </h2>
                        </div>
                        <div class="knowledge-item knowledge-left d-center p2-bg">
                            <div class="box">
                                <h3 class="white">
                                    12-15
                                    <span class="d-block">
                                        Years
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="knowledge-inner d-grid gap-xxl-4 gap-xl-3 gap-2">
                        <div class="knowledge-item d-center p5-bg">
                            <div class="box">
                                <h3 class="white">
                                    3-5
                                    <span class="d-block">
                                        Years
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="knowledge-item d-center p3-bg">
                            <div class="box">
                                <h3 class="white">
                                    6-8
                                    <span class="d-block">
                                        Years
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="knowledge-item d-center p4-bg">
                            <div class="box">
                                <h3 class="white">
                                    16-18
                                    <span class="d-block">
                                        Years
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="knowledge-inner d-grid gap-xxl-4 gap-xl-3 gap-2">
                        <div class="knowledge-item d-center p2-bg">
                            <div class="box">
                                <h3 class="white">
                                    9-11
                                    <span class="d-block">
                                        Years
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Element -->
    <img src="{{ asset('ascent/assets/img/about/knowledge-lshpe.png') }}" alt="img" class="knowledge-shapeleft d-xl-block d-none">
    <img src="{{ asset('ascent/assets/img/about/knowledge-animal.png') }}" alt="img" class="knowledge-animal">
</section>

<!--<< Inspair Section Start >>-->
{{-- <section class="inspair-section position-relative overflow-hidden">
    <div class="container">
        <div class="row flex-row-reverse g-4 align-items-end justify-content-between">
            <div class="col-lg-5 col-md-6 col-sm-7">
                <div class="inspair-content">
                    <div class="section-title mb-40">
                        <span class="sub-title wow fadeInUp black">Get Connected</span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Education That Sparks Imaginat Nurturing Curiosity Inspire
                        </h3>
                    </div>
                    <form action="#" class="footer-form wow fadeInUp" data-wow-delay=".4s">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="button" class="white d-flex align-content-center gap-2">
                            Submit
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
                <div class="inspainr-thumb-box">
                    <div class="inspair-thumb">
                        <img src="{{ asset('ascent/assets/img/ainspair/inspair-thumb.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection
