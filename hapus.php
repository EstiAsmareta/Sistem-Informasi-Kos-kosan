<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM penghuni WHERE id_penghuni='$id'";
    $query = mysqli_query($link, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_penghuni.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>