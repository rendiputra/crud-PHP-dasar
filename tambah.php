<?php
include ('koneksi.php');
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by Tutorial WEB</title>
</head>
<body><center>
	<fieldset>
	<br><br><br><br>
	<h2>Simple CRUD</h2>
	<p><a href="index.php">Beranda</a>/ <a href="tambah.php">tambah data</a>/<a href="tambahguru.php">tambah guru</a>/<a href="listguru.php">List Guru</a></p>
	<h3>Tambah data siswa</h3>
	<form action="proses-tambahdata.php" method="post">
	<table cellpadding="3" cellpadding="0">
		<tr>
			<label for="nis">
			<td>NIS</td>
			<td>:</td></label>
			<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">pilih kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="RPL">RPL</option>
						<option value="MM">MM</option>
						<option value="TRANS">trans</option>
						<option value="TJA">TJA</option>
						<option value="TKJ">TKJ</option>
					</select>
				</td>
			</tr>
			<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td>
					<input type="submit" value="Daftar" name="daftar" /></td>
			</tr>
		</table>
	</fieldset>
	</form>
</center>
</body>
</html>