<?php 
	session_start();
  require 'config.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:kuliner.php?pesan=gagal");
	}
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="gaya.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>Kuliner</title>
</head>

<body>
  <!-- Navbar start -->
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
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="destinasi.php" class="nav-item nav-link">Destination</a>
          </ul>
          <form class="d-flex ms-auto" method="get">
            <input type="text" name="cari" class="form-control me-2 mt-2 rounded-pill" placeholder="Search..." class="fa-solid fa-magnifying-glass" aria-label="Search">
            <!-- <input type="submit" value="Cari" class="mt-2 me-3"> -->
            <!-- <button class="btn btn-light me-2 rounded-pill" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
            <a role="button" class="btn btn-light me-2 mt-2 rounded-pill" type="button" href="cart.php" data-bs-target="#keranjang" data-bs-toggle="modal"><i class="fa-solid fa-cart-shopping pt-1"></i></a>
            <a class="btn btn-light mt-2 rounded-pill" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
          </form>
        </div>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide shadow-lg" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="margin-top: 6%;">
              <div class="carousel-item active">
                <img src="img/banner27.jpg" class="d-block w-100" style="height: 390px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Carousel</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero cumque voluptatibus et eaque rerum quos voluptatem?</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/banner25.jpg" class="d-block w-100" style="height: 390px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Carousel</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo libero cumque voluptatibus et eaque rerum quos voluptatem?</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/banner26.jpg" class="d-block w-100" style="height: 390px">
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
          
    </div>

    <h3 class="text-center mt-4 mb-4">Find Your Culinary</h3>
    <div class="row justify-content-center">

  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <?php 
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
        }
      ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card shadow-lg">
          <div class="card-body p-2 mb-2">
            <img src="gambar/<?php echo $row['product_image'];?>" class="card-img-top" widht="350px">
            <div class="card-body">
              <h4 class="card-title text-center text-warning"><?= $row['product_name'] ?></h4>
              <h6 class="card-text text-center">Rp.<?= number_format($row['product_price'],2) ?></h6>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-warning btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add tocart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>