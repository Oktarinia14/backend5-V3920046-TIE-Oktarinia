<?php
error_reporting(0);
include 'koneksi.php'; //terhubung ke file koneksi.php

if (isset($_GET["id"])) { //mengedit/mengubah data melalui id
  $id = ($_GET["id"]);

  $result = mysqli_query($koneksi, "SELECT * FROM tb_body WHERE id ='$id'");
  //mendenifisikan variable result dan memanggil data dengan cara
  //memilih dari database tb_body dimana id (data) = variable id
  //id ini bisa dikatakan sebagai perwakilan 
  while ($row = mysqli_fetch_array($result)) {
    //membuat variable diikuti dengan nama data pada database
    // jadi kita untuk menampilkan data dari database tinggal memanggil variable yang sudah dibuat
    $id = $row["id"];
    $judul = $row["judul"];
    $isi = $row["isi"];
    $foto = $row["foto"];
  }
} else {
  header("location:InformasiAdmin.php");
  //mengarahkan pada halaman informasiAdmin
}
?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <title></title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">HALAMAN ADMIN | <b>Lovely Pet</b></a>
  <form class="form-inline my-2 my-lg-0 ml-auto">
  </form>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Index.php"><i class="fas fa-share-alt-square mr-2"></i> Admin</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="InformasiAdmin.php"><i class="fas fa-users mr-2"></i> Informasi</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fas fa-inbox mr-2"></i> Konsultasi</a>
        <hr class="">
      </li>
    </ul>
  </div>
  <div class="col-md-10 p-5 pt-2">
    <!-- MEMBUAT FORM UNTUK EDIT -->
    <h3><i class="fas fa-folder-plus mr-2"></i>Edit Informasi</h3>
    <p>Isi form dibawah ini untuk mengedit data</p>
    <hr>
    <div class="col-md-10 p-5 pt-2">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-body">
            <form action="prosesedit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div class="form-group">
                <label>Id</label>
                <input class="form-control" name="id" type="text" id="id" value="<?php echo $id ?>" />
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name="judul" type="text" id="judul" value="<?php echo $judul ?>" />
              </div>

              <div class="form-group">
                <label>Isi</label>
                <input class="form-control" name="isi" type="text" id="isi" value="<?php echo $isi ?>" />
              </div>

              <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                  <input type="file" name="foto" id="foto" />
                  <?php echo $foto; ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
              </tr>
              </table>

            </form>
            </body>

</html>