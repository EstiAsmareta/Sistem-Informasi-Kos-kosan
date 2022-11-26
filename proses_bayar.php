<?php

include("koneksi.php");

// cek apakah tombol d sudah diklik atau blum?
if(isset($_POST['bayar'])){

    // ambil data dari formulir
    $id_penghuni = $_POST['id_penghuni'];
    $id_pembayaran = $_POST['id_pembayaran'];
    $kode_kos= $_POST['kode_kos'];
    $lama = $_POST['lama'];
    $kode_transfer = $_POST['kode_transfer'];
    $bank = $_POST['bank'];
    $tipe_pembayaran = $_POST['tipe_pembayaran'];
    $konfirmasi = $_POST['konfirmasi'];
    // buat query
    $sql = "INSERT INTO pembayaran(id_pembayaran,id_penghuni, kode_kos, lama, kode_transfer, bank, tipe_pembayaran, tgl_transaksi, konfirmasi) VALUES
('$id_pembayaran', '$id_penghuni','$kode_kos', '$lama','$kode_transfer', '$bank', '$tipe_pembayaran', now(), '$konfirmasi')";
    $query = mysqli_query($link, $sql);

    // cek apakah query simpan berhasil
    if( $query ) {
        // kalau berhasil dialihkan ke halaman index.php dengan status=sukses
        header('Location: listBayar.php');
    } else {
        // kalau gagal dialihkan ke halaman indek.php dengan status=gagal
        header('Location: hasil_bayar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>