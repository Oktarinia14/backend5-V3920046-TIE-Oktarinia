<?php
error_reporting(0);
include 'koneksi.php'; //memanggil data
// fungsi supaya saat menekan tombol edit dapat mengedit
if(isset($_POST['edit'])){
	//digunakan variable dengan awalan $ kemudian diikuti dengan nama data pada database
	// jadi kita untuk menampilkan data dari database tinggal memanggil variable yang sudah dibuat
	$id = $_POST['id']; 
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" .$foto; //ditambahakan nama file supaya tersimpan di file image

	if(empty($foto)){ 
		//fungsi empty () memeriksa apakah variabel memiliki nilai kosong string kosong, 0, NULL atau False. 
		//Menampilkan FALSE jika var memiliki nilai yang tidak kosong dan bukan nol.
		$query = "UPDATE tb_body set judul = '$judul', isi = '$isi' where id = '$id' ";
		//variable query untuk perintah update database tb_body dengan mesetting ulang/mengedit pada database 
		//judul, isi dimana data id = variable id
	}else{
		//kondisi lainnya 
		//mendenifisikan variable file dan memanggil data dengan cara
    	//memilih dari database tb_body dimana id (data) = variable id
    	//id ini bisa dikatakan sebagai perwakilan data yang akan dipilih
		$file = mysqli_query($koneksi, "SELECT foto FROM tb_body where judul ='$judul'");
		$hasil = mysqli_fetch_array($file);
		$foto_lama=$hasil['foto'];
		unlink("image/" .$foto_lama);

		//kondisi saat ingin mengupload file gambar
		if(move_uploaded_file($tmp, $path)){
			$query = "UPDATE tb_body set judul = '$judul', isi = '$isi', foto = '$foto' where id = '$id' ";
			//terdapat perintah untuk mengupdate database tb_body yang mesetting/edit judul, 
			//isi, dan foto dengan id sebagai perwakilan
		}
	}

	$result = mysqli_query ($koneksi, $query);//variable result untuk mengkoneksikan dengan dengan database
    //mysqli_query sendiri berfungsi untuk mengirimkan perintah query ke database mysql


	//kondisi untuk hasil sesudah kita melakukan edit dan menekan tombol edit
	if (!$result){
		//kondisi jika gagal mengedit maka akan terdapat notice dan 
		//memunculkan nomor kode eror dan pesan eror
		die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
	}
	else{
		//kondisi jika data berhasil ditambahkan akan langsung mengarah ke halaman informasiAdmin
		echo "<script>alert('Data Berhasil Diubah');window.location.href='InformasiAdmin.php'</script>";
	}
}
?>