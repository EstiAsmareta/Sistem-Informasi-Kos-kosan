<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_pembayaran = $_POST['id_pembayaran'];
    $kode_transfer = $_POST['kode_transfer'];
    $bank = $_POST['bank'];
    $tipe_pembayaran = $_POST['tipe_pembayaran'];
    $konfirmasi = $_POST['konfirmasi'];

    // buat query update
    $sql = "UPDATE pembayaran SET id_pembayaran='$id_pembayaran', kode_transfer='$kode_transfer', bank='$bank', tipe_pembayaran='$tipe_pembayaran', konfirmasi='$konfirmasi' WHERE id_pembayaran=$id_pembayaran";
    $query = mysqli_query($link, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman listBauarAdm.php
        header('Location: listBayarAdm.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>