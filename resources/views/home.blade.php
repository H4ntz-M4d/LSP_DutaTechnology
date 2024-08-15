@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <!-- BANNER -->
    <section class="pt-4 pt-md-9">
        <div class="contain">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">

                    <!-- Image -->
                    <img src="assets/img/illustrations/illustration-2.png" class="img-fluid mw-md-150 mw-lg-120 mb-6 mb-md-0"
                        alt="..." data-aos="fade-up" data-aos-delay="100">

                </div>

                <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-start">
                        <span class="text-primary">Lembaga Sertifikasi Profesi</span> <br>
                        Politeknik Negeri Malang
                    </h1>

                    <!-- Text -->
                    <p class="lead text-center text-md-start text-body-secondary mb-6 mb-lg-8">
                        Terlisensi sejak tahun 2008 oleh Badan Nasional Sertifikasi Profesi (BNSP) dengan nomor:
                        BNSP-LSP-029-ID

                    </p>

                </div>

            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

@endsection
