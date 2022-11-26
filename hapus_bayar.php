<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id_pembayaran = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pembayaran WHERE id_pembayaran=$id_pembayaran";
    $query = mysqli_query($link, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: listBayarAdm.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>