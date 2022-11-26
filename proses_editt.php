<?php

    include("koneksi.php");
    
    // cek apakah tombol simpan sudah diklik atau blum?
    if(isset($_POST['simpan'])){
    
        // ambil data dari formulir
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['Sex'];
        $no_hp = $_POST['no_hp'];
        $pekerjaan = $_POST['pekerjaan'];
    
        // buat query update
        $sql = "UPDATE penghuni SET id_penghuni=$id, nama='$nama', alamat='$alamat', Sex='$jk', no_hp='$no_hp', pekerjaan='$pekerjaan' WHERE id_penghuni=$id";
        $query = mysqli_query($link, $sql);
    
        // apakah query update berhasil?
        if( $query ) {
            // kalau berhasil alihkan 
            header('Location: list_penghuni.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    
    
    } else {
        die("Akses dilarang...");
    }
    
    ?>

    