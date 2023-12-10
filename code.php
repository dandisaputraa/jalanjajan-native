<?php
session_start();
require 'config.php';



if(isset($_POST['delete_makanan']))
{
    $id = mysqli_real_escape_string($conn, $_POST['delete_makanan']);
    $i = mysqli_query($conn, "SELECT * FROM product WHERE id ='$id' ");
	$u =mysqli_fetch_array($i);
    
    if(is_file("gambar/".$u['gambar'])) unlink("gambar/".$u['gambar']);
    $query = "DELETE FROM product WHERE id='$id' ";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Culinary Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Culinary Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if(isset($_POST['update_makanan']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_qty = mysqli_real_escape_string($conn, $_POST['product_qty']);
    $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);
    $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $query = "UPDATE product SET product_name='$product_name', product_price='$product_price', product_qty='$product_qty', product_image='$product_image',category='$category' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Culinary Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Culinary Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}

if(isset($_POST['update_makanan']))
{
    //buat folder bernama gambar
    $tempdir = "gambar/"; 
             if (!file_exists($tempdir))
             mkdir($tempdir,0755); 
            
             $target_path = $tempdir . basename($_FILES['gambar']['name']);
 
             //nama gambar
             
             $product_name= mysqli_real_escape_string($conn,$_POST['product_name']);
             $product_price= mysqli_real_escape_string($conn,$_POST['product_price']);
             $product_qty= mysqli_real_escape_string($conn,$_POST['product_qty']);
             $nama_gambar= mysqli_real_escape_string($conn,$_FILES['gambar']['name']);
             $product_code= mysqli_real_escape_string($conn,$_POST['product_code']);
             $category= mysqli_real_escape_string($conn,$_POST['category']);
             //ukuran gambar
             $ukuran_gambar = $_FILES['gambar']['size']; 
             $fileinfo = @getimagesize($_FILES["gambar"]["tmp_name"]);

             //lebar gambar
             $width = $fileinfo[0];
             //tinggi gambar
             $height = $fileinfo[1]; 
             if($ukuran_gambar > 2019200){ 
                 echo 'Ukuran gambar melebihi 2000kb';
             }else if ($width > "2000" || $height > "2000") {
                  echo 'Ukuran gambar harus 480x640';
             }else{
                 if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path)) {
                     
                     $query="UPDATE product SET product_name='$product_name', product_price='$product_price', product_qty='$product_qty', gambar = '$nama_gambar', product_code = '$product_code', category = '$category'";
                     $query="INSERT INTO product (gambar) VALUES ('$nama_gambar')";
                     $query_run = mysqli_query($conn, $query);

                     if($query_run)
                     {
                         $_SESSION['message'] = "Culinary Updated Successfully";
                         header("Location: admin.php");
                         exit(0);
                     }
                     else
                     {
                         $_SESSION['message'] = "Culinary Not Updated";
                         header("Location: admin.php");
                         exit(0);
                     }
                     
                 } else {
                     echo 'Simpan data gagal';
                 }
             } 
   }


if(isset($_POST['save_makanan']))
{
    //buat folder bernama gambar
    $tempdir = "gambar/"; 
             if (!file_exists($tempdir))
             mkdir($tempdir,0755); 
            
             $target_path = $tempdir . basename($_FILES['gambar']['name']);
 
             //nama gambar
             $nama_gambar= mysqli_real_escape_string($conn,$_FILES['gambar']['name']);
             //ukuran gambar
             $ukuran_gambar = $_FILES['gambar']['size']; 

             $fileinfo = @getimagesize($_FILES["gambar"]["tmp_name"]);
             //lebar gambar
             $width = $fileinfo[0];
             //tinggi gambar
             $height = $fileinfo[1]; 
             if($ukuran_gambar > 2019200){ 
                 echo 'Ukuran gambar melebihi 800kb';
             }else if ($width > "2000" || $height > "2000") {
                  echo 'Ukuran gambar harus 480x640';
             }else{
                 if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_path)) {
                     
                     $query="INSERT INTO product(product_name,product_price,product_qty,product_image,product_code,category) VALUES('".$_POST['product_name']."','".$_POST['product_price']."','".$_POST['product_qty']."', '".$nama_gambar."', '".$_POST['product_code']."', '".$_POST['category']."')";
                     $query_run = mysqli_query($conn, $query);

                     if($query_run)
                     {
                         $_SESSION['message'] = "Culinary Updated Successfully";
                         header("Location: admin.php");
                         exit(0);
                     }
                     else
                     {
                         $_SESSION['message'] = "Culinary Not Updated";
                         header("Location: admin.php");
                         exit(0);
                     }
                     
                 } else {
                     echo 'Simpan data gagal';
                 }
             } 
   }

//    if(isset($_GET['cari'])){
//     $cari = $_POST['cari'];
//     $query = "SELECT * FROM product WHERE product_name LIKE '%$cari%'";  
//    }else{
//     $data = mysqli_query($conn,$query);  
//    }
//    $no = 1;
//    while($d = mysqli_fetch_array($data)){
// }

   
   



?>