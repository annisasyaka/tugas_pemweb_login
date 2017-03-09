<?php

if(isset($_POST['simpan'])){
	include('koneksi.php');

	$id     = $_POST['id'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$usia	= $_POST['usia'];

	$update = mysql_query("UPDATE biodata SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id_biodata='$id'") or die(mysql_error());

	if ($update) {
		 header("location:utama.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>