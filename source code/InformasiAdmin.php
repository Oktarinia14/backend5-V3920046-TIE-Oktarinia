<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <title></title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">HALAMAN ADMIN | <b>Lovely Pet</b></a>
    </nav>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
      <a class="nav-link active text-white" href="index1.php"><i class="fas fa-tachometer-alt mr-2"></i>Halaman Utama</a><hr class="">
        </li>
        <li class="nav-item">
      <a class="nav-link active text-white" href="Index.php"class="fas fa-share-alt-square mr-2"></i> Admin</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="InformasiAdmin.php"><i class="fas fa-share-alt-square mr-2"></i> Informasi</a><hr class="">
        </li>
  <li class="nav-item">
      <a class="nav-link text-white" href="#"><i class="fas fa-users mr-2"></i>Konsultasi </a><hr class="">
        </li>

</ul>
  </div>
      <div class="col-md-10 p-5 pt-2" >
          <h3><i class="fas fa-share-alt-square mr-2"></i>Kelola Menu Informasi</h3>
          <p> Tambah, edit, dan hapus data informasi</p><hr>
          
<?php
    error_reporting(0);
    include 'koneksi.php';
    //koneksi ke database
?>
    <head>
        <title>Informasi-Admin</title>
    <head>
    <body>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
            <tr>
            <!-- jundul untuk pemanggilan data -->
                <th>Id</th>
                <th>Judul</th>
                <th>Isi Informasi</th>
                <th>Foto</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no=0; //dimulai dari nol
            $result = mysqLi_query($koneksi,"SELECT * FROM tb_body ORDER BY id ASC");
            // memanggil data dengan cara memanggil koneksi
            // lalu pilih dari data base tb_boy dengan menggunakan id dari urutan terkecil ke besar
            while($row = mysqli_fetch_array($result)){
                $no++ //perulangan 
            ?>
                <tr> 
                    <!-- memanggil database dengan variable sesuai dengan yang di db -->
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['judul'];?></td>
                    <td><?php echo $row['isi'];?></td>
                    
                    <td>
                        <center>
                            <img src="image/<?php echo $row['foto']; ?>" border="0" width="70px" height="70px"/>
                        </center>
                    </td>
                    <td>
                        <a href="Edit.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Edit</a>
                    </td>
                    <td>
                        <a href="HapusInformasi.php?id=<?php echo $row['id'];?>"class="btn btn-warning">Hapus</a>
                    </td>
                </tr>
                <?php } ?>          
            </tbody>
        </table>
        <a href="input.php" class="btn btn-success"> tambah </a>
</html>

