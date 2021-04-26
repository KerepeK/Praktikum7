<?php 
// memanggil koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi,"select * from admin where nama='$username' and pass='$password'");
// cek data
$cek = mysqli_num_rows($query);
if($cek > 0){ //jika cek lebih dari 0 tampilkan halaman tampilkontak php
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tampilkontak.php");
}else{ //jika tidak tampilkan halaman index.php
	header("location:index.php");
}
?>