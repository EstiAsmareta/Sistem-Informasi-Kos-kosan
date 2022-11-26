<?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id_penghuni'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $job = $_POST['pekerjaan'];
    $nama_kosan = $_POST['nama_kosan'];
    $no_kos = $_POST['kosan_no'];

    // buat query
    $sql = "INSERT INTO penghuni (id_penghuni, nama, ttl, Sex, pekerjaan, no_hp, alamat, Nama_Kos, Kosan_no) 
    VALUES ('$id','$nama', '$ttl', '$alamat', '$jenis_kelamin', '$no_hp', '$job', '$nama_kosan','$no_kos')";
    $query = mysqli_query($link, $sql);

    // cek apakah query simpan berhasil
    if( $query ) {
        // kalau berhasil dialihkan ke halaman index.php dengan status=sukses
        header('Location: bayar.php');
    } else {
        // kalau gagal dialihkan ke halaman indek.php dengan status=gagal
        header('Location: DaftarPenyewa.php');//
    }

} else {
    die("Akses dilarang...");
}

?>