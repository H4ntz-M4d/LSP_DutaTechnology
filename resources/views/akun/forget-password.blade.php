<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css">

    <!-- Title -->
    <title>Landkit</title>
  </head>
  <body>

    <!-- CONTENT -->
    <section class="section-border border-primary">
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center gx-0 min-vh-100">
          <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

            <!-- Heading -->
            <h1 class="mb-0 fw-bold text-center">
              Forget Password
            </h1>

              <!-- Text -->
              <p class="mb-8 text-center text-body-secondary">

              </p>

            <!-- Form -->
            <form class="mb-6">

              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="email">
                  Email Address
                </label>
                <input type="email" class="form-control" id="email" placeholder="name@address.com">
              </div>

              <!-- Password -->
              <div class="form-group mb-5">
                <label class="form-label" for="password">
                 Confirm Code
                </label>
                <input type="text" class="form-control" id="code" placeholder="Code">
              </div>

              <!-- Submit -->
              <button class="btn w-100 btn-primary" type="submit">
                reset
              </button>

            </form>

            <!-- Text -->


          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>
