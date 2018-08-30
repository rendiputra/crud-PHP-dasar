
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by Tutorial WEB</title>
</head>
<body><center>
	<h2>Simple CRUD</h2>
	<p><a href="index.php">Beranda</a>/ <a href="tambah.php">tambah data</a>/<a href="tambahguru.php">tambah guru</a>/<a href="listguru.php">List Guru</a></p>
	<h3>Form data Guru</h3>
	<form action="tambah-proses.php" method="post">
	<table cellpadding="3" cellpadding="0">
		<tr>
			<td>NPK</td>
			<td>:</td>
			<td><input type="text" name="npk" required></td>
			</tr>
			<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki Laki">Laki Laki</input>
					<input type="radio" name="jeniskelamin" value="Perempuan">Permpuan</input>
				</td>
			</tr>
			<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea> </textarea></td>
			</tr>

			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="">pilih Status</option>
						<option value="PNS">Pegawai Negri Sipil</option>
						<option value="Honorer">Honorer</option>
						<option value="Kontrak">Kontrak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pelatihan</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="pelatihan" value="Pemograman Android">Pemograman Android<br>
					<input type="checkbox" name="pelatihan" value="Instalasi Sistem Operasi">Instalasi Sistem Operasi<br>
					<input type="checkbox" name="pelatihan" value="Psikologis anak">Psikologis anak<br>
					<input type="checkbox" name="pelatihan" value="Pedagogig" >Pedagogig<br>
					

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
				<td><input type="submit" value="Tambah" name="tambah"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>