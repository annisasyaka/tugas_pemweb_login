<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');

	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$usia	= $_POST['usia'];

	$input = mysql_query("INSERT INTO biodata VALUES(NULL,'$nama','$alamat','$usia')") or die(mysql_error());

	if ($input) {
		 header("location:utama.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>