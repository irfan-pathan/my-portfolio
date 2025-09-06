@extends('layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Portfolio</h1>
                        <p class="mb-0"> A showcase of the projects I've built — from dynamic web apps to scalable backend
                            systems. Explore how I’ve turned ideas into code and challenges into clean, reliable solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Portfolio</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                {{-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Product</li>
          <li data-filter=".filter-branding">Branding</li>
          <li data-filter=".filter-books">Books</li>
        </ul><!-- End Portfolio Filters --> --}}

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('public/assets/frontent-assets/img/portfolio/thunderkool.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>ThunderKool Billing Application</p>
                                <a href="{{ asset('public/assets/frontent-assets/img/portfolio/thunderkool.png') }}" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('public/assets/frontent-assets/img/portfolio/streammly.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>streammly</p>
                                <a href="{{ asset('public/assets/frontent-assets/img/portfolio/streammly.png') }}"
                                    title="Product 1" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('public/assets/frontent-assets/img/portfolio/bthere.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>bthere.xyz</p>
                                <a href="{{ asset('public/assets/frontent-assets/img/portfolio/bthere.png') }}" title="Branding 1"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('public/assets/frontent-assets/img/portfolio/goldcraft.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 4</h4>
                                <p>goldcraft.xyz</p>
                                <a href="{{ asset('public/assets/frontent-assets/img/portfolio/goldcraft.png') }}"
                                    title="Branding 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://goldcraft.sg/" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </section><!-- /Portfolio Section -->
@endsection
