<?php session_start();

include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);

if($cek){
	$_SESSION['username']=$username; 
	header("location:utama.php");
	}
else{
 	?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php
 	echo mysql_error();
}
?>