@extends('layouts.layout')

@section('title', 'Ekosistem LSPTA')

@section('content')
    <!-- HEADER -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8">

            <!-- Heading -->
            <h1 class="display-4 text-center">
              Ekosistem LSPTA
            </h1>

            <!-- Text -->
            <p class="lead mb-7 text-center text-body-secondary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec condimentum quam. Fusce pellentesque faucibus lorem at viverra. Integer at feugiat odio. In placerat euismod risus proin.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

        <!-- SECTION -->
        <section class="pt-6 pt-md-8">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-9 col-xl-11">
    
                <!-- Fugure -->
                <figure class="figure mb-7">
    
                  <!-- Image -->
                  <img class="figure-img img-fluid rounded lift lift-lg" src="{{ asset('assets/img/photos/photo-28.jpg') }}" alt="...">
    
                  <!-- Caption -->
                  <figcaption class="figure-caption text-center">
                    This is a caption on this photo for reference
                  </figcaption>
    
                </figure>
    
                <!-- Text -->
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi reiciendis odio perferendis libero saepe voluptatum fugiat dolore voluptates aut, ut quas doloremque quo ad quis ipsum molestias neque pariatur commodi.
                </p>
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, quidem, earum! Quo fugiat voluptates similique quidem dolorem ex non quibusdam odio suscipit error, maiores, itaque blanditiis vel, sed, cum velit?
                </p>
    
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .container -->
        </section>
@endsection