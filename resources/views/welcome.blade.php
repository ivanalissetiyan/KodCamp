@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <title>Landing Page</title>
    </head>

    <body>



        <section class="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12 copywriting">
                                <p class="story">
                                    BELAJAR BERSAMA MENTOR
                                </p>
                                <h1 class="header">
                                    Kenapa Saya <span class="text-purple">Memutuskan <br> Belajar</span> Koding
                                </h1>
                                <p class="support">
                                    Kembangkan karir mu sebagai developer profesional dengan <br> akeahlian koding yang
                                    dibutuhkan didunia industri 4.0.
                                </p>
                                <p class="cta">
                                    <a href="#" class="btn btn-master btn-primary">
                                        Get Started
                                    </a>
                                </p>
                            </div>
                            <div class="col-lg-6 col-12 text-center">
                                <a href="#">
                                    <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row brands">
                    <div class="col-lg-12 col-12 text-center">
                        <img src="{{ asset('images/brands.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="benefits">
            <div class="container">
                <div class="row text-center pb-70">
                    <div class="col-lg-12 col-12 header-wrap">
                        <p class="story">
                            TUNGGU APA LAGI ?
                        </p>
                        <h2 class="primary-header">
                            Belajar Lebih Cepat & Lebih Baik
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="item-benefit">
                            <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                            <h3 class="title">
                                Perbedaan
                            </h3>
                            <p class="support">
                                Belajar dari siapa pun di seluruh <br> dunia dan dapatkan keterampilan <br> baru
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item-benefit">
                            <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                            <h3 class="title">
                                Jalur Belajar
                            </h3>
                            <p class="support">
                                Koding Bootcamp akan <br> membantu member, untuk <br>memilih jalan mana yang cocok
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item-benefit">
                            <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                            <h3 class="title">
                                1-1 Mentoring
                            </h3>
                            <p class="support">
                                Belajar fleksibel sesuai jalur <br> anda
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item-benefit">
                            <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                            <h3 class="title">
                                Pekerjaan masa depan
                            </h3>
                            <p class="support">
                                Kurikulum dikembangkan bersama <br> perusahaan dan pemilik teknologi di
                                dunia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="steps">
            <div class="container">
                <div class="row item-step pb-70">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
                    </div>
                    <div class="col-lg-6 col-12 text-left copywriting">
                        <p class="story">
                            KARIR LEBIH BAIK
                        </p>
                        <h2 class="primary-header">
                            Persiapkan perjalanan
                        </h2>
                        <p class="support">
                            Validasi skill Anda melalui 1-on-1 Professional Code <br> Review yang diberikan langsung oleh
                            Developer Expert
                        </p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-master btn-secondary me-3">
                                Learn More
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row item-step pb-70">
                    <div class="col-lg-6 col-12 text-left copywriting pl-150">
                        <p class="story">
                            STUDY HARDER
                        </p>
                        <h2 class="primary-header">
                            Finish The Project
                        </h2>
                        <p class="support">
                            Each of you will be joining the private group and also <br> working together with team members
                            on project
                        </p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-master btn-secondary me-3">
                                View Demo
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
                    </div>

                </div>
                <div class="row item-step">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="{{ asset('images/step3.png ') }}" class="cover" alt="">
                    </div>
                    <div class="col-lg-6 col-12 text-left copywriting">
                        <p class="story">
                            END GAME
                        </p>
                        <h2 class="primary-header">
                            Big Demo Day
                        </h2>
                        <p class="support">
                            Learn how to speaking in public to demonstrate your <br> final project and receive the important
                            feedbacks
                        </p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-master btn-secondary me-3">
                                Showcase
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing">
            <div class="container">
                <div class="row pb-70">
                    <div class="col-lg-5 col-12 header-wrap copywriting">
                        <p class="story">
                            GOOD INVESTMENT
                        </p>
                        <h2 class="primary-header text-white">
                            Start Your Journey
                        </h2>
                        <p class="support">
                            Learn how to speaking in public to demonstrate your <br> final project and receive the important
                            feedbacks
                        </p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-master btn-thirdty me-3">
                                View Syllabus
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="table-pricing paket-gila">
                                    <p class="story text-center">
                                        FULL BELAJAR sip
                                    </p>
                                    <h1 class="price text-center">
                                        Rp380.000
                                    </h1>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Design Assets
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Source Code
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Group Konsultasi
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Final Project Certificate
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            1-1 Mentoring Program
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Future Job Opportinity
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Premium Design Kit
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Website Builder
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <p>
                                        <a href="{{ route('checkout') }}" class="btn btn-master btn-primary w-100 mt-3">
                                            Take This Plan
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="table-pricing paket-biasa">
                                    <p class="story text-center">
                                        BARU MULAI
                                    </p>
                                    <h1 class="price text-center">
                                        Rp180.000
                                    </h1>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            1-1 Mentoring Program
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Final Project Certificate
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing mb-4">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Offline Course Videos
                                        </p>
                                        <div class="clear"></div>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="item-benefit-pricing">
                                        <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                        <p>
                                            Future Job Opportinity
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <p>
                                        <a href="{{ route('checkout') }}"
                                            class="btn btn-master btn-secondary w-100 mt-3">
                                            Start With This Plan
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-70">
                    <div class="col-lg-12 col-12 text-center">
                        <img src="{{ asset('images/brands.png') }}" height="30" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="row text-center pb-70">
                    <div class="col-lg-12 col-12 header-wrap">
                        <p class="story">
                            TESTIMONI SISWA
                        </p>
                        <h2 class="primary-header">
                            Bergabung dengan jaringan
                            developer terbesar
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="item-review">
                                    <img src="{{ asset('images/stars.svg') }}" alt="">
                                    <p class="message">
                                        Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di KodeCamp belajarnya
                                        step by step
                                    </p>
                                    <div class="user">
                                        <img src="{{ asset('images/fanny_photo.png ') }}" class="photo" alt="">
                                        <div class="info">
                                            <h4 class="name">
                                                Fanny
                                            </h4>
                                            <p class="role">
                                                Developer at Google
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="item-review">
                                    <img src="{{ asset('images/stars.svg') }}" alt="">
                                    <p class="message">
                                        Aplikasi karya saya & tim di kantor sudah go-internasional. "Koding Bootcamp" kini
                                        dinikmati
                                        puluhan ribu user.
                                    </p>
                                    <div class="user">
                                        <img src="{{ asset('images/angga.png') }}" class="photo" alt="">
                                        <div class="info">
                                            <h4 class="name">
                                                Angga
                                            </h4>
                                            <p class="role">
                                                CEO at BWA Corp
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="item-review">
                                    <img src="{{ asset('images/stars.svg') }}" alt="">
                                    <p class="message">
                                        Yang kudapat dari kelas KodeCamp adalah teknik belajar yang terstruktur dan
                                        komunitasnya yang bagus
                                    </p>
                                    <div class="user">
                                        <img src="{{ asset('images/beatrice.png ') }}" class="photo" alt="">
                                        <div class="info">
                                            <h4 class="name">
                                                Beatrice
                                            </h4>
                                            <p class="role">
                                                QA at Facebook
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row copyright">
                            <div class="col-lg-12 col-12">
                                <p>
                                    All Rights Reserved. Copyright ASD Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

    </body>

    </html>

@endsection
