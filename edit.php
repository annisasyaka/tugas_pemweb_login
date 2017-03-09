<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="utama.css">
	<title>Edit Data</title>
</head>
<body>
<center>

<h3>Edit Data Biodata</h3>
<div id="down">

<?php 

include('koneksi.php');

$id = $_GET['id'];

$show = mysql_query("SELECT * FROM biodata WHERE id_biodata='$id'");

if(mysql_num_rows($show)==0){
	echo '<script>window.history.back()</script>';
}
else{
	$data = mysql_fetch_assoc($show);
}

?>

<form action="edit-proses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name='nama' value="<?php echo $data['nama']; ?>" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name='alamat' value="<?php echo $data['alamat']; ?>" required></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td><input type="text" name='usia' value="<?php echo $data['usia']; ?>" required></td>
		</tr>
	</table>
	<br>
	<input  type="submit" value="Simpan" name="simpan">
</form>
</div>
</center>
</body>
</html>