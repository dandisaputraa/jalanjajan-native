<?php 
	session_start();
    require 'config.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:admin.php?pesan=gagal");
	}
 
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
                <h4>Detail Makanan
                    <a href="tambah.php" class="btn btn-primary float-end">Add Data</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Gambar</th>
                            <th>Kode</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM product ORDER BY id DESC";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            { $no = 1;
                                foreach($query_run as $data)
                                {
                                    ?>
                                    <tr>
                                        
                                        <td><?= $no; ?></td>    
                                        <td><?= $data['product_name']; ?></td>
                                        <td><?= $data['product_price']; ?></td>
                                        <td><?= $data['product_qty']; ?></td>
                                        <td><img width="150px" src="gambar/<?php echo $data['product_image'];?>" alt=""></td>
                                        <td><?= $data['product_code']; ?></td>
                                        <td><?= $data['category']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_makanan" value="<?=$data['id'];?>" class="btn btn-danger btn-sm" onClick="Yakin?;">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <?php $no++; ?>
                                    <?php
                                }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="mt-4">
<?php include('message.php'); ?>
</div>
</div>


    </body>
</html>