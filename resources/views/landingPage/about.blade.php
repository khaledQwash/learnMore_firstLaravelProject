@extends('landingPage.master')
@section('content')

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="subtitle">About</span>
            <h2>About</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis
                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="content">
                        <h2>Crafting meaningful experiences through thoughtful design and innovative solutions</h2>
                        <p class="lead">We believe in the power of purposeful creation, where every detail serves a
                            greater vision and every project becomes a testament to our commitment to excellence.</p>
                        <p>Our journey began with a simple philosophy: to transform ideas into reality through
                            meticulous attention to detail and an unwavering dedication to quality. Today, we continue
                            to push boundaries while staying true to our core values of authenticity, innovation, and
                            meaningful impact.</p>
                        <div class="stats-wrapper">
                            <div class="stat-item">
                                <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="8"
                                    data-purecounter-duration="1"></span>
                                <span class="label">Years of Excellence</span>
                            </div>
                            <div class="stat-item">
                                <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="150"
                                    data-purecounter-duration="1"></span>
                                <span class="label">Projects Completed</span>
                            </div>
                            <div class="stat-item">
                                <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="12"
                                    data-purecounter-duration="1"></span>
                                <span class="label">Team Members</span>
                            </div>
                        </div>
                        <div class="cta-wrapper">
                            <a href="#" class="btn-link">
                                Discover our story
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="image-wrapper">
                        <img src="{{ asset('mySiteAssets/img/about/about-1.webp') }}" alt="About us" class="img-fluid">
                        <div class="floating-element">
                            <div class="quote-content">
                                <blockquote>
                                    "Excellence is never an accident. It is always the result of high intention, sincere
                                    effort, and intelligent execution."
                                </blockquote>
                                <cite>— Aristotle</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
            <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-1.webp') }}" class="img-fluid"
                                alt="Client 1">
                        </div>
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-2.webp') }}" class="img-fluid"
                                alt="Client 2">
                        </div>
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-3.webp') }}" class="img-fluid"
                                alt="Client 3">
                        </div>
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="250">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-4.webp') }}" class="img-fluid"
                                alt="Client 4">
                        </div>
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-5.webp') }}" class="img-fluid"
                                alt="Client 5">
                        </div>
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="350">
                        <div class="client-item">
                            <img src="{{ asset('mySiteAssets/img/clients/clients-6.webp') }}" class="img-fluid"
                                alt="Client 6">
                        </div>
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

@endsection