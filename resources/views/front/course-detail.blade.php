@extends('layouts.master')

@section('content')
<!-- Service Details Section Start -->
<section class="service-dtails overflow-hidden section-padding-sm position-relative">
    <div class="container">
        {{-- <div class="details-thumb mb-30 w-100 wow fadeInUp" data-wow-delay=".2s">
            <img src="assets/img/aservices/details-big1.png" alt="img" class="w-100 round10">
        </div>
        <div class="common-content-box mb-40 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="custom-title black mb-lg-3 mb-2">
                Discover the power of education Knowledge is the key
            </h4>
            <p class="pra mb-30">
                There are many variations passages a This category focariatio of deign Redefining the an the concept
                of living This
                category focuses on the design and construction of bu a arrangement furniture and decorative
                elements within them
                focariatio of deign There are many variations passages a This category focariatio of deign
                Redefining the an the concept
                of living This category focuses on the design and construction of bu a arrangement furniture
            </p>
            <div class="d-flex justify-content-between mb-40">
                <ul>
                    <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                        <i class="fa-solid fa-chevron-right p5-clr"></i>
                        Education is the key to success. It empowers individuals with knowledge
                    </li>
                    <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                        <i class="fa-solid fa-chevron-right p5-clr"></i>
                        Education encompasses formal learning in schools, colleges, and universities
                    </li>
                </ul>
                <ul>
                    <li class="d-flex align-items-center gap-xl-3 gap-2 pra mb-2">
                        <i class="fa-solid fa-chevron-right p5-clr"></i>
                        Education opens doors to opportunities, fosters critical thinking, and promote
                    </li>
                    <li class="d-flex align-items-center gap-xl-3 gap-2 pra">
                        <i class="fa-solid fa-chevron-right p5-clr"></i>
                        It plays a vital role in shaping the future generation and promoting
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center g-xl-4 g-3 mb-60">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-thumb-middile w-100">
                        <img src="assets/img/aservices/details-middle1.png" alt="img" class="w-100 round10">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-thumb-middile w-100">
                        <img src="assets/img/aservices/details-middle2.png" alt="img" class="w-100 round10">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-thumb-middile w-100">
                        <img src="assets/img/aservices/details-middle3.png" alt="img" class="w-100 round10">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-xl-4 g-3 mb-40">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-class-info w-100">
                        <div class="icon d-center">
                            <img src="assets/img/aicon/car-icons1.png" alt="img">
                        </div>
                        <h4 class="black mb-xl-3 mb-2">
                            Online Class
                        </h4>
                        <p class="pra">
                            Lorem ipsum dolor sit amet consecte adipiscing elit platea the ,osr of a proin mollis
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-class-info w-100">
                        <div class="icon d-center">
                            <img src="assets/img/aservices/sertd1.png" alt="img">
                        </div>
                        <h4 class="black mb-xl-3 mb-2">
                            Special Tuition
                        </h4>
                        <p class="pra">
                            Lorem ipsum dolor sit amet consecte adipiscing elit platea the ,osr of a proin mollis
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="details-class-info w-100">
                        <div class="icon d-center">
                            <img src="assets/img/aicon/car-icons5.png" alt="img">
                        </div>
                        <h4 class="black mb-xl-3 mb-2">
                            Knowledge Hub
                        </h4>
                        <p class="pra">
                            Lorem ipsum dolor sit amet consecte adipiscing elit platea the ,osr of a proin mollis
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="cont-box mb-30 wow fadeInUp" data-wow-delay=".4s">
            <h4 class="black mb-lg-3 mb-2">
               {{ $course->title }}
            </h4>

        </div>
        <div class="row g-lg-4 g-3 wow fadeInUp" data-wow-delay=".5s">
            <div class="col-lg-6 col-md-6">
                <p class="pra">
                    {{ $course->description}}
                </p>

                <h6 class="mt-10">${{ number_format($course->amount_usd, 2) }}, &#8358;{{ number_format($course->amount_ngn, 2) }}</h6>

                <div class="mt-5 header-button">
                    <a href="{{ route('student.courses.schedules', ['course' => $course->id]) }}" class="theme-btn p2-bg">Start Class Now</a>
                </div>
            </div>
            <div class="align-items-center col-lg-6 col-md-6">
                <div class="see-all-thumb w-100">
                    <img src="{{ url('storage/images/'.$course->image) }}" alt="img" class="w-100 round10">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
