<?php
error_reporting(0);
include 'koneksi.php'; //menghubungkan dengan file koneksi.php

if (isset($_POST['simpan'])){ //fungsi saat tombol simpan ditekan
    //digunakan variable dengan awalan $ kemudian diikuti dengan nama data pada database
	// jadi kita untuk menampilkan data dari database tinggal memanggil variable yang sudah dibuat
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path ="image/".$foto;


    if (move_uploaded_file($tmp, $path)) {
        //kondisi jika akan menambahkan data
        $query = "INSERT INTO tb_body VALUES ('','$judul','$isi','$foto')";
        //mendenifisikan query dengan perintah untuk memasukkan data dari form ke database tb_body
        // diikuti dengan pemanggilan values menggunakan variable yang sudah didefinisikan tadi
        $result = mysqli_query($koneksi, $query);//variable result untuk mengkoneksikan dengan dengan database
        //mysqli_query sendiri berfungsi untuk mengirimkan perintah query ke database mysql
    

        if (!$result) {
            //kondisi jika gagal ditambahkan
            //akan muncul notic, pesan eror, dan nomor kode eror
            die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));        
        }
        else
        {
            //jika data berhasil ditambahkan terdapat notic dan menuju ke halaman informasi admin
            echo "<script>
            alert('Data Berhasil Ditambah');window.location.href='InformasiAdmin.php'</script>";
        }
        
    }
}

 ?>