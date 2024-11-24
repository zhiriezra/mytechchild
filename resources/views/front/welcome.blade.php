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
                                Coding for Kids:
                            </span>
                                Unlock Creativity &
                            <span class="text-sount">
                                Future Skills
                            </span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Empowering young minds with fun, interactive coding courses for every skill level.
                        </p>
                        <a href="{{ route('register') }}" class="theme-btn p4-bg">
                            <span>
                                Get Started Today
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
                                    <span class="count">7</span>+
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
                            Our mission is to make coding accessible, enjoyable, and meaningful for children of all backgrounds. We believe in empowering the next generation with the tools and skills they need to succeed in a digital world.  Our pathways are designed to nurture creativity and build skills progressively, guiding students from foundational knowledge to advanced concepts at their own pace. Each pathway encourages growth, curiosity, and a deeper understanding of coding and design.
                        </p>

                        <a href="{{ route('about') }}" class="theme-btn gra-border2">
                            <span class="black fw-medium">
                                Learn more about us
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Talk Counter Section Start -->
<section class="talk-counter space-top overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="talk-content">
                    <div class="section-title mb-60">
                        <span class="sub-title wow fadeInUp p2-clr">
                            Invest in Learning, Invest in the Future
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Shaping Tomorrow's Innovators, One Code at a Time
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Our experienced instructors aren’t just teachers—they’re mentors who spark curiosity and build confidence. With a hands-on, kid-friendly curriculum, we make learning to code an exciting adventure
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
                                <span class="count">500</span>+
                            </h3>
                            <p>Young Techies</p>
                        </div>
                    </div>
                    <div class="counter-talk-items gra-border round10">
                        <div class="icon iconbg-v4">
                            <img src="{{ asset('ascent/assets/img/aicon/icon3.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">7</span>+
                            </h3>
                            <p>Years of Experience</p>
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
                                <span class="count">95</span>%
                            </h3>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                    <div class="counter-talk-items gra-border round10">
                        <div class="icon iconbg-v5">
                            <img src="{{ asset('ascent/assets/img/aicon/icon4.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>
                                <span class="count">3</span>+
                            </h3>
                            <p>Countries reached</p>
                        </div>
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
                Our Popular Courses
            </h4>

            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                @foreach ($courses as $key => $course)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="{{ route('course.details', ['course' => $course->id]) }}">
                            <div class="details-thumb-middile w-100">
                                <img src="{{ url('storage/images/'.$course->image) }}" alt="img" class="w-100 round10">
                            </div>
                            <div class="mt-2">
                                <h5>{{ $course->title }}</h5>
                            </div>
                            <div>
                                <h6>${{ number_format($course->amount_usd, 2) }}, &#8358;{{ number_format($course->amount_ngn, 2) }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</section>

<!-- Faq Section Start -->
<section class="faq-sectionv mt-60 overflow-hidden space-bottom">
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
                        {{-- <span class="sub-title wow fadeInUp p5-clr">
                            Some Faq
                        </span> --}}
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Why Coding Matters for Kids
                        </h3>
                    </div>
                    <div class="tab-faq faq">
                        <div class="accordion-section d-grid gap-xxl-4 gap-lg-3 gap-2">
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        Develops Problem-Solving Skills
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            Coding teaches kids how to think logically and approach challenges with creative solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        Builds Future-Ready Skills
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            In our tech-driven world, coding is a valuable skill that gives kids an advantage in school and future careers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <h5 class="header-area">
                                    <button
                                        class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                        type="button">
                                        Encourages Creativity and Curiosity
                                    </button>
                                </h5>
                                <div class="content-area">
                                    <div class="content-body">
                                        <p>
                                            Kids learn to bring their ideas to life through interactive, fun projects that foster innovation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-single">
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
                            </div> --}}
                        </div>
                    </div>

                    <a href="{{ route('register') }}" class="theme-btn p2-bg mt-10">
                        <span>
                            Start your journey
                        </span>
                    </a>
                </div>
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
                        What our Parents say
                    </span>
                    <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        Unlocking the Power of Wonderworks Child
                    </h3>
                </div>
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

                    <a href="{{ route('register') }}" class="theme-btn p2-bg mt-10">
                        <span>
                            Join our community
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Knowledge Section Start -->
{{-- <section class="knowledge-section cmn-bg space-top overflow-hidden space-bottom position-relative">
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
</section> --}}

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
