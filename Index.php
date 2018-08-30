<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by Tutorial WEB</title>
</head>
<body><center>
	<br><br><br>
	<h2>Simple CRUD</h2>
	<p><a href="index.php">Beranda</a>/ <a href="tambah.php">tambah data</a>/<a href="tambahguru.php">tambah guru</a>/<a href="listguru.php">List Guru</a></p>
	<h3>data siswa</h3>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>jurusan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM murid";
        $query = mysqli_query($db, $sql);
        

        while($siswa = mysqli_fetch_array($query)){$murid_id= 'murid_id';
            echo "<tr>";
            echo "<td>".$siswa['murid_id']."</td>";
            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['kelas']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?murid_id=".$siswa['murid_id']."'>Edit</a> | ";
            echo "<a href='hapus.php?murid_id=".$siswa['murid_id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</center>
</body>
</html>