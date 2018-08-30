<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['murid_id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$murid_id = $_GET['murid_id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM murid WHERE murid_id=$murid_id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="murid_id" value="<?php echo $siswa['murid_id'] ?>" />

        <p>
            <label for="nis">nis : </label>
            <input type="text" name="nis" placeholder="nama lengkap" value="<?php echo $siswa['nis'] ?>" />
        </p>
        <p>
            <label for="nama">nama : </label>
            <input type="text" name="nama" placeholder="Nama" value="<?php echo $siswa['nama'] ?>"></input>
        </p>
        <p>
            <label for="kelas">Kelas: </label>
            <?php $kelas = $siswa['kelas']; ?>
            <label><input type="radio" name="kelas" value="X" <?php echo ($kelas == 'X') ? "checked": "" ?>> X</label>
            <label><input type="radio" name="kelas" value="XI" <?php echo ($kelas == 'XI') ? "checked": "" ?>> XI</label>
            <label><input type="radio" name="kelas" value="XII" <?php echo ($kelas == 'XII') ? "checked": "" ?>> XII</label>
        </p>
        <p>
            <label for="Jurusan">Jurusan: </label>
            <select name="jurusan">
                
            <?php $jurusan = $siswa['Jurusan']; ?>
                <option <?php echo ($jurusan == 'RPL') ? "selected": "" ?>>RPL </option>
                <option <?php echo ($jurusan == 'Trans') ? "selected": "" ?>>Trans</option>
                <option <?php echo ($jurusan == 'MM') ? "selected": "" ?>>MM </option>
                <option <?php echo ($jurusan == 'TJA') ? "selected": "" ?>>TJA </option>
                <option <?php echo ($jurusan == 'TKJ') ? "selected": "" ?>>TKJ </option>
            </select>
        </p>
        
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>