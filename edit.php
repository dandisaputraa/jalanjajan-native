<?php
    session_start();
    require 'code.php';
?>

<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="gaya2.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Admin</title>
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo4.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
          JalanJajan.ID
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
          </ul>
          <form class="d-flex ms-auto">
            <a role="button" class="btn btn-light me-2" type="button" href="index.php"><i class="fa-solid fa-right-from-bracket"></i></i>Logout</a>
          </form>
        </div>
      </div>
    </nav>

<div class="container mt-5">
<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Detail Makanan</h4>
            </div>
            <div class="card-body">

            <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM product WHERE id='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $update = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $update['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nama Makanan</label>
                                        <input type="text" name="product_name" value="<?=$update['product_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Harga</label>
                                        <input type="number" name="product_price" value="<?=$update['product_price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jumlah</label>
                                        <input type="number" name="product_qty" value="<?=$update['product_qty'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gambar</label>
                                        <div class="row mb-3 mt-2">
                                          <img style="width:300px;" src="gambar/<?=$update['product_image'];?>" alt="">
                                        </div>
                                        <input type="file" name="product_image" value="gambar/<?=$update['product_image'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kode</label>
                                        <input type="text" name="product_code" value="<?=$update['product_code'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kategori</label>
                                        <select name="category" id="category" value="<?=$update['category'];?>">
                                            <option type="text" class="form-control">Makanan</option>
                                            <option type="text" class="form-control">Minuman</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_makanan"  class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>