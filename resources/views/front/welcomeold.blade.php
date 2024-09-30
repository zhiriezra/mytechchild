@extends('layouts.master')

@section('content')
<section class="about section">

    <div class="container" id="about">

        <div class="row gy-4">

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('mentor/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>About Tech Child</h3>
                <p class="fst-italic">
                    Welcome to Tech Child, where we are dedicated to empowering the next generation through the exciting
                    world of technology. Our mission is to make coding and digital creativity accessible, engaging, and
                    fun for kids of all ages. At Tech Child, we believe that every child has the potential to be a
                    creator, innovator, and problem-solver, and we’re here to guide them every step of the way.
                </p>

                <p class="fst-italic">
                    We offer a variety of coding and digital design courses specifically tailored for young minds. Our
                    expert instructors are more than just teachers—they're mentors who inspire and nurture creativity.
                    With a curriculum that seamlessly blends fun with learning, we aim to make technology an adventure,
                    whether through coding, game design, or digital art.
                </p>
                <p class="fst-italic">
                    Our hands-on, interactive approach ensures that each child learns by doing, building practical
                    skills that will serve them well into the future. At Tech Child, we focus not just on technical
                    proficiency, but also on fostering critical thinking and creativity. Whether your child is just
                    starting out or already has some experience, we have a program designed to help them grow and
                    thrive.
                </p>

                <p class="fst-italic">
                    Join us at Tech Child, and watch your child’s ideas come to life through technology. Together, we’re
                    building a future where every child is empowered to be a digital creator
                </p>

            </div>

        </div>
    </div>

</section>
<!-- /About Section -->


<!-- Courses Section -->
<section class="courses section">

    <!-- Section Title -->
    <div id="courses" class="container section-title" data-aos="fade-up">
        <h2>Classes</h2>
        <p>Popular Classes</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="course-item">
                    <img src="{{ asset('mentor/assets/img/kids-wearing-virtual-reality-goggles.jpg') }}"
                        class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category bg-success">Ongoing</p>
                            <!-- <p class="price">$65.00</p> -->
                        </div>

                        <h3><a href="https://learn.mytechchild.com/course/view.php?id=3">Coding with Scratch</a></h3>

                    </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="course-item">
                    <img src="{{ asset('mentor/assets/img/little-boy-participating-online-class.jpg') }}"
                        class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category">Coming Soon</p>
                            <!-- <p class="price">$65.00</p> -->
                        </div>

                        <h3><a href="#">Coding with Python</a></h3>

                    </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="course-item">
                    <img src="{{ asset('mentor/assets/img/little-boy-participating-online-class.jpg') }}"
                        class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="category">Coming Soon</p>
                            <!-- <p class="price">$65.00</p> -->
                        </div>

                        <h3><a href="#">Data Analysis
                        </a></h3>

                    </div>
                </div>
            </div> <!-- End Course Item-->


        </div>

    </div>

</section>
<!-- /Courses Section -->

<section class="section trainers-index">
    <!-- Section Title -->
    <div id="courses" class="container section-title" data-aos="fade-up">
        <h2>Educators</h2>
        <p>Our Expert Trainers</p>
    </div><!-- End Section Title -->

    <div class="container team-section">
        <div class="row justify-content-center">
          <!-- Team Member 1 -->
          <div class="col-md-3">
            <div class="card">
              <img src="{{ asset('mentor/assets/img/trainers/excel.jpg') }}" class="card-img-top" alt="Instructor 1">
              <div class="card-body text-center">
                <h5 class="card-title">Excel</h5>
                <p class="card-text fs-6">
                    <small>Meet Excel, our dedicated instructor with a passion for sparking kids' interest in technology. With over a year of experience in guiding young learners through the exciting world of coding, Excel delights in watching their creative ideas come to life through programming.
                    </small>
                </p>
              </div>
            </div>
          </div>
          <!-- Team Member 2 -->
          <div class="col-md-3">
            <div class="card">
              <img src="{{ asset('mentor/assets/img/trainers/nelson.png') }}" class="card-img-top" alt="Instructor 2">
              <div class="card-body text-center">
                <h5 class="card-title">Nelson</h5>
                <p class="card-text"><small>Meet Nelson, a seasoned ICT trainer with over 7 years of experience in the industry. Nelson specializes in delivering tailored training programs that address the diverse needs of learners at all levels.
                </small>
                </p>
              </div>
            </div>
          </div>
          <!-- Team Member 3 -->
          <div class="col-md-3">
            <div class="card">
              <img src="{{ asset('mentor/assets/img/trainers/emmanuel.jpg') }}" class="card-img-top" alt="Instructor 3" style="object-position: center">
              <div class="card-body text-center">
                <h5 class="card-title">Emmanuel</h5>
                <p class="card-text"><small>Meet Emmanuel, a dedicated B.Sc. Computer Science graduate from Benue State University. With advanced skills in Microsoft PowerPoint and Excel, Emmanuel excels at creating impactful presentations and conducting data-driven analysis.
                </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
