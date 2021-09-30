<?php
    error_reporting(0);
    include 'koneksi.php';
    //mengubungkan ke file koneksi.php

if (isset($_GET['id'])) { //menghapus data melalui id

    $id = $_GET['id'];
    $file = mysqli_query($koneksi, "SELECT foto FROM tb_body where id = '$id'");
    //mendenifisikan variable file dan memanggil data dengan cara
    //memilih dari database tb_body dimana id (data) = variable id
    //id ini bisa dikatakan sebagai perwakilan untuk data  yang akan kita hapus
    $hasil = mysqli_fetch_array($file);  //Fungsi ini akan menangkap data dari hasil perintah query dan 
    //membentuknya ke dalam array asosiatif dan array numerik
    $foto_lama = $hasil['foto']; 
    unlink("img/" . $foto_lama);

    $query = "DELETE FROM tb_body where id = '$id'";
    //digunakan variable query untuk mendefinisikan saat penghapusan data
    //dengan menggunakan SELECT --> pilih data dari database tb_body yang dimana id (data)=variable id
    //id ini bisa dikatakan sebagai perwakilan untuk data  yang akan kita hapus
    $result = mysqli_query($koneksi, $query); //variable result untuk mengkoneksikan dengan dengan database
    //mysqli_query sendiri berfungsi untuk mengirimkan perintah query ke database mysql

    if (!$result) 
    {
        //kondisi jika data gagal ditambahkan 
        //akan menampilkan nomor kode eror dan pesan eror
        die("Data gagal di tambahkan;". mysqli_errno($koneksi).mysqli_error($koneksi));
    } 
    else 
    //jika kondisi berhasil maka akan terdapat notic
    //dan diarahkan ke halaman Informasi Admin
    {
        echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='InformasiAdmin.php';
              </script>";
    }
}
?>