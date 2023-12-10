<?php 
	session_start();
  require 'config.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:destinasi.php?pesan=gagal");
	}
 
?>

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

    <title>Destinasi</title>
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
            <a href="" class="nav-item nav-link">Home</a>
            <a href="kuliner.php" class="nav-item nav-link">Culinary</a>
          </ul>
          <form class="d-flex ms-auto">
            <input class="form-control me-2 mt-2 rounded-pill" type="search" placeholder="Search..." aria-label="Search">
            <!-- <button class="btn btn-light me-2 rounded-pill" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
            <a class="btn btn-light mt-2 rounded-pill" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a> 
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- jumbotron -->

    <div id="carouselExampleIndicators" class="carousel slide shadow-lg" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" style="margin-top: 6%;">
        <div class="carousel-item active">
          <img src="img/banner16.jpg" class="d-block w-100" style="height: 390px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Carousel</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero cumque voluptatibus et eaque rerum quos voluptatem?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner15.jpg" class="d-block w-100" style="height: 390px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Carousel</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero cumque voluptatibus et eaque rerum quos voluptatem?</p>
          </div>        
        </div>
        <div class="carousel-item">
          <img src="img/banner17.jpg" class="d-block w-100" style="height: 390px">
          <div class="carousel-caption d-none d-md-block">
            <h5>Carousel</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero cumque voluptatibus et eaque rerum quos voluptatem?</p>
          </div>          
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <!-- end jumbotron -->

    <!-- offcanvas -->

    <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Account</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          <label class="mb-2 text-muted" for="name">Name</label>
        </div>
      </div>
    </div> -->

    <!-- end -->

    <!-- daftar gambar baris 1 -->
    <h3 class="text-center mt-5 mb-4">Find Your Destination</h3>
    <div class="row d-flex justify-content-center pt-2">
        <div class="card shadow-lg" style="width: 350px;">
          <img src="img/gmbr1.jpg" class="card-img">
          <div class="card-body">
            <h5 class="card-title">Pantai Losari, Makassar</h5>
            <p class="card-text">Nama Pantai Losari sendiri tidak hanya dikenal oleh masyarakat Sulawesi saja, banyak orang di pulau lain pun juga telah mengetahui keindahan dari pantai ini.</p>
            <a class="btn btn-warning mb-3" data-bs-target="#wisata1" data-bs-toggle="modal">Lihat Selengkapnya</a>
          </div>
        </div>

        <div class="card shadow-lg" style="width: 350px;">
          <img src="img/gmbr2.jpg" class="card-img"></a>
          <div class="card-body">
            <h5 class="card-title">Pulau Samalona, Makassar</h5>
            <p class="card-text">Salah satu destinasi wisata yang tidak boleh dilewatkan begitu saja saat berada di Sulawesi Selatan adalah Pulau Samalona. Di area pulau tersebut, Anda bisa mencoba untuk menyelam dan menikmati keindahan bawah lautnya.</p>
            <a class="btn btn-warning mb-3" data-bs-target="#wisata2" data-bs-toggle="modal">Lihat Selengkapnya</a>
          </div>
        </div>

        <div class="card shadow-lg" style="width: 350px;">
          <img src="img/gmbr3.jpg" class="card-img"></a>
          <div class="card-body">
            <h5 class="card-title">Taman Laut Taka Bonerate, Kep. Selayar</h5>
            <p class="card-text">Bagi Anda yang menyukai kegiatan menyelam, maka taman laut ini merupakan sebuah tempat wisata yang tepat untuk dikunjungi. Terdapat banyak jenis ikan, kura-kura, dan juga penyu yang hidup di area ini.</p>
            <a class="btn btn-warning mb-3" data-bs-target="#wisata3" data-bs-toggle="modal">Lihat Selengkapnya</a>
          </div>
        </div>

        <!-- end baris 1 -->

        <!-- baris 2 -->
 
        <div class="row d-flex justify-content-center pt-2">
        <div class="card shadow-lg" style="width: 350px;">
          <img src="img/gmbr4.jpg" class="card-img"></a>
          <div class="card-body">
            <h5 class="card-title">Taman Nasional Bantimurung, Maros</h5>
            <p class="card-text">Taman Nasional Bantimurung terkenal akan kupu-kupu. Terdapat setidaknya 250 jenis kupu-kupu di tempat tersebut. Luas dari taman ini sendiri bahkan mencapai 43.750 ha.</p>
            <a class="btn btn-warning mb-3" data-bs-target="#wisata4" data-bs-toggle="modal">Lihat Selengkapnya</a>
          </div>
        </div>

          <div class="card shadow-lg" style="width: 350px;">
            <img src="img/gmbr6.jpg" class="card-img"></a>
            <div class="card-body">
              <h5 class="card-title">Wisata Malino, Gowa</h5>
              <p class="card-text">Tempat wisata ini telah terkenal sejak zaman BelAnda bertahun tahun silam. Anda juga bisa mengunjungi perkebunan teh, air terjun, hutan pinus dan masih banyak lagi di Kawasan wisata ini.</p>
              <a class="btn btn-warning mb-3" data-bs-target="#wisata5" data-bs-toggle="modal">Lihat Selengkapnya</a>
            </div>
          </div>
  
          <div class="card shadow-lg" style="width: 350px;">
            <img src="img/gmbr7.jpg" class="card-img"></a>
            <div class="card-body">
              <h5 class="card-title">Benteng Somba Opu, Gowa</h5>
              <p class="card-text">Pada zaman dahulu benteng ini digunakan untuk pusat perdagangan dan juga pelabuhan bagi produk rempah-rempah. Hingga akhirnya di tahun 1990 an, Benteng Somba Opu tersebut mengalami rekonstruksi sehingga memiliki tampilan yang lebih baik.</p>
              <a class="btn btn-warning mb-3" data-bs-target="#wisata6" data-bs-toggle="modal">Lihat Selengkapnya</a>
            </div>
          </div>

          <!-- end baris 2 -->
  

          <!-- baris 3 -->

          <div class="row d-flex justify-content-center pt-2">
          <div class="card shadow-lg" style="width: 350px;">
            <img src="img/gmbr8.jpg" class="card-img"></a>
            <div class="card-body">
              <h5 class="card-title">Pantai Tanjung Bira, Bulukumba</h5>
              <p class="card-text">Di Pantai Tanjung Bira Anda akan disambut dengan hamparan pasir putih yang terlihat begitu eksotis. Beragam aktivitas seru dapat Anda lakukan selagi berada di pantai nan indah ini.</p>
              <a class="btn btn-warning mb-3" data-bs-target="#wisata7" data-bs-toggle="modal">Lihat Selengkapnya</a>
            </div>
          </div>
  
          <div class="card shadow-lg" style="width: 350px;">
            <img src="img/gmbr9.jpg" class="card-img"></a>
            <div class="card-body">
              <h5 class="card-title">Pusat Kerajinan Perahu Pinisi, Bulukumba</h5>
              <p class="card-text">Pusat kerajinan perahu pinisi ini sendiri berada di kawasan Bulukamba. Pada zaman dahulu wilayah tersebut juga sering disebut dengan istilah Butta Panritta Lopi. Jika diartikan, makna dari Butta Panritta Lopi adalah tanah pada ahli pembuat perahu jenis phinisi.</p>
              <a class="btn btn-warning mb-3" data-bs-target="#wisata8" data-bs-toggle="modal">Lihat Selengkapnya</a>  
            </div>
          </div>

            <div class="card shadow-lg" style="width: 350px;">
              <img src="img/gmbr10.jpg" class="card-img"></a>
              <div class="card-body">
                <h5 class="card-title">Gua Tampang Allo, Tana Toraja</h5>
                <p class="card-text">Gua Tampang Allo adalah sebuah gua yang telah dialihfungsikan sebagai sebuah pemakaman. Meskipun tempat tersebut adalah sebuah pemakaman, namun gua ini layak untuk Anda kunjungi saat berlibur di Sulawesi Selatan.</p>
                <a class="btn btn-warning mb-3" data-bs-target="#wisata9" data-bs-toggle="modal">Lihat Selengkapnya</a>
              </div>
            </div>

            <!-- end baris 3 -->
            <div class="row d-flex justify-content-center pt-2">
            <div class="card shadow-lg" style="width: 350px;">
              <img src="img/gmbr11.jpg" class="card-img"></a>
              <div class="card-body">
                <h5 class="card-title">Desa Kete Kesu, Tana Toraja</h5>
                <p class="card-text">Salah satu desa di Sulawesi Selatan yang tidak boleh Anda lewatkan begitu saja adalah Ke’te Kesu. Jika diartikan makna dari Ke’te Kesu sendiri adalah pusat kegiatan. Di area desa yang ada, para wisatawan yang datang dapat melihat deretan rumah adat yang begitu mempesona.</p>
                <a class="btn btn-warning mb-3" data-bs-target="#wisata10" data-bs-toggle="modal">Lihat Selengkapnya</a>
              </div>
            </div>
    
            <div class="card shadow-lg" style="width: 350px;">
              <img src="img/gmbr12.jpg" class="card-img"></a>
              <div class="card-body">
                <h5 class="card-title">Pulau Bulupoloe, Luwu Timur</h5>
                <p class="card-text">Dengan berkunjung ke pulau tersebut, Anda dapat menikmati pemandangan alam yang begitu luar biasa. Di dalamnya juga telah tersedia penginapan dan tempat berburu kuliner bagi para wisatawan yang datang.</p>
                <a class="btn btn-warning mb-3" data-bs-target="#wisata11" data-bs-toggle="modal">Lihat Selengkapnya</a>
              </div>
            </div>
    
            <div class="card shadow-lg" style="width: 350px;">
              <img src="img/gmbr13.jpg" class="card-img"></a>
              <div class="card-body">
                <h5 class="card-title">Pulau Kapoposang, Pangkep</h5>
                <p class="card-text">Tempat tersebut ialah sebuah pulau yang bernama Pulau Kapoposang. Gugusan terumbu karang di area pulau tersebut sangatlah indah dan mempesona.</p>
                <a class="btn btn-warning mb-3" data-bs-target="#wisata12" data-bs-toggle="modal">Lihat Selengkapnya</a>
              </div>
            </div>

            <!-- baris 4 -->

            <div class="row justify-content-center mt-2">
              <div class="card shadow-lg" style="width: 350px;">
                <img src="img/gmbr18.jpg" class="card-img"></a>
                <div class="card-body">
                  <h5 class="card-title">Kajang Ammatoa, Bulukumba</h5>
                  <p class="card-text">Desa Tana Toa adalah desa tempat masyarakat adat Kajang yang masih erat dalam menjaga dan melindungi peradaban mereka sampai saat ini.</p>
                  <a class="btn btn-warning mb-3" data-bs-target="#wisata16" data-bs-toggle="modal">Lihat Selengkapnya</a>
                </div>
              </div>
              <div class="card shadow-lg" style="width: 350px;">
                <img src="img/gmbr16.jpg" class="card-img"></a>
                <div class="card-body">
                  <h5 class="card-title">Pulau Dutungan, Barru</h5>
                  <p class="card-text">Di pulau ini sendiri terdapat gugusan bebatuan nan indah. Anda dapat menemukan beragam spot foto menarik saat berkunjung ke pulau ini. Di pinggir pulau tersebut juga terdapat area pantai yang memiliki pasir putih nan indah.</p>
                  <a class="btn btn-warning mb-3" data-bs-target="#wisata14" data-bs-toggle="modal">Lihat Selengkapnya</a>
                </div>
              </div>
      
              <div class="card shadow-lg" style="width: 350px;">
                <img src="img/gmbr17.jpg" class="card-img"></a>
                <div class="card-body">
                  <h5 class="card-title">Pulau Gusung, Kep. Selayar</h5>
                  <p class="card-text">Selagi berada disana, Anda dapat melakukan Beragam aktivitas dengan sanak saudara yang turut serta. Mulai dari menyelam, snorkeling, dan juga bermain air di pinggir pantai pada pulau tersebut.</p>
                  <a class="btn btn-warning mb-3" data-bs-target="#wisata15" data-bs-toggle="modal">Lihat Selengkapnya</a>
                </div>
              </div>
      
              <!-- end baris 5 -->

              <!-- Modul 1 -->
              <div class="modal fade" id="wisata1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pantai Losari</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.751376723798!2d119.40546796389589!3d-5.1436754034429875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d52ea30d089%3A0x6101a2ac09b61090!2sPantai%20Losari!5e0!3m2!1sid!2sid!4v1664930795946!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><h2>Sejarah</h2><p>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modul -->

              <!-- modul 2 -->
              <div class="modal fade" id="wisata2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Samalona</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><p>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 3 -->
              <div class="modal fade" id="wisata3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Taman Laut Taka Bone Rate</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 4 -->
              <div class="modal fade" id="wisata4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Taman Nasional Bantimurung</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 5 -->
              <div class="modal fade" id="wisata5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Wisata Malino</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 6 -->
              <div class="modal fade" id="wisata6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Benteng Somba Opu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 7 -->
              <div class="modal fade" id="wisata7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pantai Tanjung Bira</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 8 -->
              <div class="modal fade" id="wisata8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pusat Kerajinan Perahu Pinisi </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 9 -->
              <div class="modal fade" id="wisata9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Gua Tampang Allo</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 10 -->
              <div class="modal fade" id="wisata10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Desa Kete Kesu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 11 -->
              <div class="modal fade" id="wisata11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Bulupoloe</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 12 -->
              <div class="modal fade" id="wisata12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Kapoposang</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 13 -->
              <div class="modal fade" id="wisata13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Cangke</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 14 -->
              <div class="modal fade" id="wisata14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Dutungan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 15 -->
              <div class="modal fade" id="wisata15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pulau Gusung</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->

              <!-- modul 16 -->
              <div class="modal fade" id="wisata16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Kajang Ammatoa</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.3365399759823!2d119.49446551346281!3d-5.135741096272947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcb2482738e3%3A0x2e3c26c2722f47eb!2sCoto%20Anging%20Mammiri%201!5e1!3m2!1sid!2sid!4v1635877205487!5m2!1sid!2sid" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>Dahulu, pantai ini dikenal dengan pusat makanan laut dan ikan bakar di malam hari (karena para penjual dan pedagang hanya beroperasi pada malam hari), serta disebut-sebut sebagai warung terpanjang di dunia (karena warung-warung tenda berjejer di sepanjang pantai yang panjangnya kurang lebih satu kilometer). Salah satu penganan khas Makassar yang dijajak di warung-warung tenda itu adalah pisang epe (pisang mentah yang dibakar, kemudian dibuat pipih, dan dicampur dengan air gula merah) Paling enak dimakan saat masih hangat dengan berbagai topping diatasnya seperti parutan keju, selai stroberi, dll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modul -->
            </div>

    <!-- end gambar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
  <footer class="text-center">Copyright &copy; 2022 &mdash; Dandi Saputra</footer>
</html>