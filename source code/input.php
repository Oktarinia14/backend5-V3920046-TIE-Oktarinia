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
< </head>
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
      <h3><i class="fas fa-share-alt-square mr-2"></i>Tambah Informasi</h3>
      <p> Isi form dibawah ini untuk menambah data</p>
      <hr>

      <body>
        <form action="prosesinput.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <div class="form-group">
            <label>Judul</label>
            <input class="form-control" name="judul" type="text" id="judul" value="">
          </div>

          <div class="form-group">
            <label>Isi Informasi</label>
            <input class="form-control" name="isi" type="text" id="isi" value="">
          </div>
          <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
              <input type="file" name="foto" id="foto" />
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
          </tr>
          </table>

        </form>
      </body>

</html>