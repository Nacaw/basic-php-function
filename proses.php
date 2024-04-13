<?php 
include "koneksi.php";

if (isset($_POST['tambah'])) {

	$code  = $_POST['code'];
	$name = $_POST['name'];
	$stock_dvd = $_POST['stock_dvd'];
	$price = $_POST['price'];
	
    // query insert data
	$query = mysqli_query($koneksi, "INSERT INTO movie (code, name, stock_dvd, price)
		VALUES ('$code', '$name', '$stock_dvd', '$price')") or die(mysqli_error($koneksi));;

	if($query) {
	    echo "<script>alert('Berhasil Menambah Data'); window.location='tes1.php';</script>";
	} else {
	    echo "<script>alert('Gagal Menambah Data:(');</script>";
	}
}

?>
