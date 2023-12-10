<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="gaya.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>JalanJajan</title>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <img src="img/logo4.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
          JalanJajan.ID
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <a href="#home" class="nav-item nav-link">Home</a>
            <a href="#about" class="nav-item nav-link">More</a>
          </ul>
          <form class="d-flex ms-auto">
            <a role="button" class="btn btn-light me-2 mt-1" type="button" href="login.php"><i class="fa-regular fa-user"></i> Login / Register</a>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- jumbotron -->
    <section id="home" class="jumbotron">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <img src="img/bg5.jpg" alt="" class="img-fluid ms-4">
        </div>
      <div class="col-lg-5">
        <h3 class="ms-4">Destinasi</h3>
        <p class="ms-auto justify-content-center text-center">
          Pariwisata dan kuliner memegang peranan penting dalam menunjang perekonomian suatu daerah karena memiliki ketertarikan sebagai sumber percepatan pertumbuhan ekonomi daerah. Wisata kuliner menjadi suatu alternatif dalam mendukung potensi wisata
          alam, wisata budaya, dan wisata sejarah. Meskipun wisata kuliner sering dianggap
          sebagai produk wisata pelengkap, tetapi wisata kuliner potensial untuk
          dikembangkan karena wisatawan yang datang biasanya tertarik untuk mencoba
          makanan lokal yang ada di daerah Makassar.</p>
        <a role="button" href="login.php" class="btn btn-warning">View More</a>
      </div>
      </div>
    </section>
    <!-- end jumbotron -->

    <!-- About -->
    <section id="about" class="about">
      <div class="row justify-content-center text-center">
        <div class="col-lg-5">
          <h3 class="ms-auto">Kuliner</h3>
          <p class="ms-2 me-2 justify-content-center text-center">Makassar adalah kota metropolitan terbesar di Indonesia Timur. Makassar terletak di pesisir barat daya Pulau Sulawesi dan berbatasan dengan Selat Makassar di barat, 
            Kabupaten Kepulauan Pangkajene di utara, Kabupaten Maros di timur, dan Kabupaten Gowa di selatan. Makassar terkenal dengan tempat wisata yang menarik dan kuliner yang menggugah selera.</p>
          <a role="button" href="login.php" class="btn btn-warning">View More</a>
        </div>
      <div class="col-lg-6">
        <img src="img/bg8.png" alt="" class="img-fluid mt-4">
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F0A500" fill-opacity="0.2" d="M0,256L34.3,229.3C68.6,203,137,149,206,160C274.3,171,343,245,411,256C480,267,549,213,617,176C685.7,139,754,117,823,101.3C891.4,85,960,75,1029,58.7C1097.1,43,1166,21,1234,16C1302.9,11,1371,21,1406,26.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </div>
    </section>
    <!-- End About -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
  <footer class="text-center">Copyright &copy; 2022 &mdash; Dandi Saputra</footer>
</html>