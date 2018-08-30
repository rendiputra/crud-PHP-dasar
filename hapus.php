<?php

include("config.php");

if( isset($_GET['murid_id']) ){

    // ambil id dari query string
    $murid_id = $_GET['murid_id'];

    // buat query hapus
    $sql = "DELETE FROM murid WHERE murid_id=$murid_id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: tambah.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>