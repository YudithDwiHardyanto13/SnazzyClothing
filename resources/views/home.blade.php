<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.css">
  <link rel="stylesheet" href="/css/app.css">

  <style>
    @media (max-width: 767px) {
      .row-cols-md-4 .col {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    .container-fluid {
      width: 80%;
      margin: auto;
    }

    /* @media (min-width: 992px) {
      .navbar-brand {
        margin-left: 120px;
      }
    }

    @media (min-width: 992px) {
      .navbar-nav {
        margin-right: 120px;
      }
    } */
  </style>
  <title>Snazzy</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Snazzy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pria</a></li>
              <li><a class="dropdown-item" href="#">Wanita</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav navigation">
          <li class="nav-item">
            <a class="nav-link" href="#footer">Bantuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Tentang kami</a>
          </li>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col text-center bg-light pt-5 pb-5 mt-5">

      <img src="/images/snazzy-nobg.png" class="img-fluid" alt="">
    </div>
  </div>
  
  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
      <div class="col ">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div>
      <div class="col ">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div>
      <div class="col ">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div><div class="col ">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div>
      <div class="col ">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          <img src="/images/t-shirt-black.png" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Kaos Polos Hitam</h5>
            <p class="card-text">
              Pria <br />
              Stock : (20) <br />
              Rp50.000
            </p>
            <a href=""><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted mt-3" id="footer">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <div class="mt-3">
              <img src="/images/snazzy-nobg.png" alt="">
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 mt-3">
              About Us
            </h6>
            <p>
              <a href="#!" class="text-reset">Information</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Store Location</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Email</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 mt-3">
              Contact Us
            </h6>
            <p>
              <a href="#!" class="text-reset">Instagram</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Whatsapp</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Facebook</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Twitter</a>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="">Snazzy</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>