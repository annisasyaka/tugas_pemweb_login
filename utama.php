<?php session_start();
if (isset($_SESSION['username'])){
?>
<head><link rel="stylesheet" type="text/css" href="utama.css"></head>


<center>
<h2>Data Biodata</h2>
	<div id="down">

<table cellpadding="5" cellspacing="0" border="1">
	<tr bgcolor="#95B9C7">
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Aksi</th>
	</tr>

<?php
include('koneksi.php');

$qry = mysql_query("SELECT * FROM biodata;") or die(mysql_error());
while ($data = mysql_fetch_array($qry)) {
	echo '<tr>';
	
 	echo '<td>'.$data['nama'].'</td>';
 	echo '<td>'.$data['alamat'].'</td>';
 	echo '<td>'.$data['usia'].'</td>';
 	echo '<td><a href="edit.php?id='.$data['id_biodata'].'">
 	Edit</a> / <a href="hapus.php?id='.$data['id_biodata'].'" 
 	onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
 	echo '</tr>';
	

}

?>
</div>
</table>
<br>
<h2>Input Data</h2>

<form action="prosesup.php" method="post">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name='nama' size="30" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name='alamat' size="30" required></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td><input type="text" name='usia' size="30" required></td>
		</tr>
	</table>
	<br>
	<input id="tombol" type="submit" value="Tambah" name="tambah">
</form>
<br>
<a href="logout.php">Logout</a>
</center>
</body>


<?php
}
else
{
 ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
dahulu</a><?php
}
?> 
</html>

