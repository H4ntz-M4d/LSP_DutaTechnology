@extends('layouts.layout')

@section('title', 'Lembaga Sertifikasi Profesi Teknik Akutansi')

@section('content')
  <body class="bg-light">

    <!-- MODALS -->
    <!-- Heading -->
    <h1 class="display-4 text-center mt-5 ">
    BERITA LSPTA
      </h1>
    <!-- SEARCH -->
    <section class="py-6 ">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Form -->
            <form class="rounded shadow">
              <div class="input-group input-group-lg">

                <!-- Text -->
                <span class="input-group-text border-0 pe-1">
                  <i class="fe fe-search"></i>
                </span>

                <!-- Input -->
                <input type="text" class="form-control border-0 px-1" aria-label="Search our blog..." placeholder="Search our blog..." value="Design Leadership">

                <!-- Text -->
                <span class="input-group-text border-0 py-0 ps-1 pe-3">

                  <!-- Text -->
                  <span class="h6 text-uppercase text-body-secondary d-none d-md-block mb-0 me-5">
                    123 results
                  </span>

                  <!-- Button -->
                  <button type="submit" class="btn btn-sm btn-primary">
                    Search
                  </button>

                </span>

              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div>
    </section>

    <!-- ARTICLES -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-15.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Cafe Coworking Has Become the Norm.
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Ab Hadley
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-14.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Weekly Roundtable Meetings Saved Us.
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Adolfo Hess
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-7.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Nature Can Save Your Creative Side.
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Ab Hadley
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-6.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Landkit is Moving to an Office In Austin, TX
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Ab Hadley
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card mb-6 mb-md-0 shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-4.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Are Hot Desks Great for Digital Nomads?
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Adolfo Hess
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-4 d-flex">

            <!-- Card -->
            <div class="card shadow-light-lg lift lift-lg">

              <!-- Image -->
              <a class="card-img-top" href="#!">

                <!-- Image -->
                <img src="{{asset('assets/img/photos/photo-5.jpg')}}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>                  </div>
                </div>

              </a>

              <!-- Body -->
              <a class="card-body" href="#!">

                <!-- Heading -->
                <h3>
                  Coffee Can Keep You Going, But At What Cost?
                </h3>

                <!-- Text -->
                <p class="mb-0 text-body-secondary">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam.
                </p>

              </a>

              <!-- Meta -->
              <a class="card-meta mt-auto" href="#!">

                <!-- Divider -->
                <hr class="card-meta-divider">

                <!-- Avatar -->
                <div class="avatar avatar-sm me-2">
                  <img src="{{asset('assets/img/avatars/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>

                <!-- Author -->
                <h6 class="text-uppercase text-body-secondary me-2 mb-0">
                  Ab Hadley
                </h6>

                <!-- Date -->
                <p class="h6 text-uppercase text-body-secondary mb-0 ms-auto">
                  <time datetime="2019-05-02">May 02</time>
                </p>

              </a>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- MORE -->
    <section class="py-7 py-md-10">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-8 col-xl-7">

            <!-- Button -->
            <a href="#!" class="btn w-100 btn-outline-gray-300 d-flex align-items-center">
              <span class="mx-auto">Load more</span> <i class="fe fe-arrow-right"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
    </div>



  </body>
@endsection
