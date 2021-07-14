@extends('frontend/layouts.template')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat Datang di YooVis</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Pesan Sekarang Layanan Terbaik Dari Kami</h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#services" class="btn-get-started scrollto">Pesan Jasa</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src={{ asset('frontend/assets/img/hero-img.png')}} class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
