@extends('layouts.layout')

@section('title', 'Sambutan Direktur')

@section('content')
    <section class="py-8 py-md-11 border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Preheader -->
                    <h6 class="text-uppercase text-primary" data-aos="fade-up">
                        Dewan Pengarah dan Direktur
                    </h6>

                    <!-- Headin -->
                    <h1 class="display-1 fw-bold" data-aos="fade-up" data-aos-delay="50">
                        Sambutan Direktur.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-body-secondary mb-6" data-aos="fade-up" data-aos-delay="100">
                        Ucapan selamat datang ke LSP Polinema .
                    </p>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">

                    <!-- Video -->
                    <div class="ratio ratio-16x9">
                        <video class="rounded-lg bg-light shadow-lg" src="{{ asset('assets/video/video-1.mp4') }}" autoplay
                            loop muted>
                            Sorry, your browser doesn't support embedded videos,
                            but don't worry, you can <a href="assets/video/video-1.mp4">download it</a>
                            and watch it with your favorite video player!
                        </video>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- STEPS -->
    <div class="position-relative mt-n12 mt-md-n15">
        <div class="shape shape-bottom shape-fluid-x text-black">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0h720v250H0V125h720z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <!-- STEPS -->
    <div class="section bg-black pt-12 pt-md-15 pb-8 pb-md-11">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-12 col-md-4 order-md-2 text-center">

                    <!-- Image -->
                    <img class="img-fluid w-75 w-md-100 mb-6 mb-md-0"
                        src="{{ asset('assets/img/illustrations/illustration-1-dark.png') }}" alt="...">

                </div>
                <div class="col-12 col-md-7 order-md-1">

                    <!-- Heading -->
                    <h2 class="text-white" style="max-width: 450px;">
                        Selamat datang di Laman Situs LSP Polinema.
                    </h2>

                    <!-- Text -->
                    <div class="lead text-body-secondary text-opacity-80 mb-0">
                        LSP-TA atau Lembaga Sertifikasi Profesi Teknisi Akuntansi merupakan Lembaga Sertifikasi pihak ke-3
                        yang melakukan sertifikasi kompetensi profesi teknisi akuntansi sesuai dengan mekanisme yang
                        ditetapkan Badan Nasional Sertifikasi Profesi atau BNSP.
                    </div>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12 col-lg-16">
                    <div class="row">
                        <div class="col-auto col-lg-12">

                            <!-- Step -->
                            <div class="row gx-0 align-items-center mb-md-5">
                                <div class="col">

                                    <!-- Divider -->
                                    <hr class="d-none d-md-block text-gray-900 text-opacity-50 me-n7">

                                </div>
                            </div> <!-- / .row -->

                        </div>
                        <div class="col col-md-0 ms-n5 ms-md-0">

                            <!-- Heading -->
                            <h3 class="text-white">
                                Tentang Kami
                            </h3>

                            <!-- Text -->
                            <p class="text-body-secondary text-opacity-80 mb-6 mb-md-0">
                                Kami merupakan Lembaga sertifikasi untuk profesi teknisi akuntansi yang pertama di Indonesia
                                dan mendapatkan lisensi dari BNSP sejak tahun 2008 dan terus diperbarui. Selain itu, sebagai
                                LSP yang mensertifikasi profesi di bidang akuntansi, kami juga berada di bawah binaan Pusat
                                Pembinaan Profesi Keuangan, Kementerian Keuangan. <br>
                                <br>
                                Sebagai LSP Pihak ke-3 kami berperan di dalam meyakinkan terciptanya link and match antara
                                kompetensi yang dimiliki oleh profesional
                                teknisi akuntansi dengan kompetensi yang dibutuhkan oleh pengguna. Untuk itu kami telah
                                membangun ekosistem yang telah sesuai dengan ketentuan BNSP, yaitu adanya SKKNI yang sesuai
                                dengan KKNI, Tempat Uji Kompetensi yang tersebar di berbagai wilayah di Indonesia, master
                                asesor dan asesor. <br>
                                <br>
                                Keberadaan laman situs LSP TA ini merupakan salah satu upaya kami untuk terus menyempurnakan
                                ekosistem yang telah kami bangun. Bagi anda, calon maupun profesional teknisi akuntansi, di
                                dalam situs ini anda dapat memperoleh informasi terkait dengan skema uji kompetensi yang
                                dapat anda ikuti, kompetensi yang diuji, tempat uji kompetensi dan jadwal uji kompetensi.
                                Tentu saja, pada laman situs ini, anda dapat mengetahui prosedur apa yang perlu anda lakukan
                                untuk mengikuti uji kompetensi. <br>
                                <br>
                                Bagi anda, pengguna profesional teknisi akuntansi, di dalam situs ini, anda dapat
                                mengidentifikasi kompetensi apa saja yang dimiliki profesional teknisi akuntansi, kompetensi
                                master asesor dan asesor yang kami miliki dan fasilitas lainnya yang tersedia. Dengan
                                demikian, diharapkan dapat membantu anda di dalam menentukan kompetensi yang dibutuhkan
                                untuk rekrutmen maupun pengembangan kompetensi pegawai. <br>
                                <br>
                                Sebagai penutup, kami ucapkan terima kasih atas kunjungan anda ke laman situs kami, semoga
                                situs ini dapat memenuhi kebutuhan informasi anda. Bila ada informasi lebih lanjut yang anda
                                butuhkan, anda dapat menghubungi channel-channel kami yang tersedia.

                                Salam Kompeten,
                                Pengurus LSP Teknisi Akuntansi

                            </p>

                        </div>
                    </div> <!-- / .row -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container-->
    </div>
@endsection
