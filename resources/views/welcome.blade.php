@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container" id="welcome">
        <div class="text-center mt-5 mb-5">
            <h2 class="section-title pb-2">Who We Are</h2>
            <p class="about-us">EldoHub is an education technology platform targeting youth and women, with an aim of preparing them to benefit from the opportunities the emerging ICT industry offers and close the skills gap in Africa’s job market.</p>
            <a class="btn more" href="{{ route('about-us') }}">Learn more</a>
        </div>
    </div>

    <div class="bg-white p-4">
        <h2 class="section-title pb-2 text-center">Our Services</h2>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                  <div class="card h-100 shadow-sm p-3 bg-white rounded">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">Capacity Building</h5>
                      <p class="card-text">We provide an easy-to-use, step-by-step guide on digital solutions to adopt at each stage of growth and training to enhance growth and productivity in your business.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100 shadow-sm p-3 bg-white rounded">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">Apprenticehip/Job matching</h5>
                      <p class="card-text">We identify tech startups and traditional businesses with digital projects and matched them with pre-vetted digital talents to gain practical work experience.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100 shadow-sm p-3 bg-white rounded">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">STEM Education</h5>
                      <p class="card-text">We support, encourage and inspire girls and young women to pursue careers in STEM. We also provide training workshops for aqcuiring tech skills.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100 shadow-sm p-3 bg-white rounded">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">Business coaching & mentorship</h5>
                      <p class="card-text">We coach and mentors entrepreneurs equiping them with the necessary tools to build transformative businesses for significant impact.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 shadow-sm p-3 bg-white rounded">
                      {{-- <img src="..." class="card-img-top" alt="..."> --}}
                      <div class="card-body">
                        <h5 class="card-title">Acceleration and Incubation</h5>
                        <p class="card-text">Do you have an idea or a startup? Bring your idea to life or take your startup to the next level with our world-class partners of accelerators and incubators.</p>
                      </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 shadow-sm p-3 bg-white rounded">
                        
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">Co-working space</h5>
                            <p class="card-text">We offer traditional co-working space, as well as a number of private office spaces and meeting rooms to accommodate the many stages of a company’s growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-5 mb-5">
        <h2 class="section-title pb-2 text-center">Our Partners</h2>
        <div class="partners row d-flex justify-content-between">
            <div><img src="/img/partners/usadf.png" alt=""></div>
            <div><img src="/img/partners/kepsa.png" alt=""></div>
            <div><img src="/img/partners/thunderbird.png" alt=""></div>
            <div><img src="/img/partners/uk_kth.png" alt=""></div>  
            <div><img src="/img/partners/kenic.png" alt=""></div>          
            <div><img src="/img/partners/afrilabs.png" alt=""></div>
            <div><img src="/img/partners/acih.png" alt=""></div>                       
            <div><img src="/img/partners/21c_skills.png" alt=""></div>
        </div>
    </div>

@endsection