<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_penghuni.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM penghuni WHERE id_penghuni=$id";
$query = mysqli_query($link, $sql);
$penghuni = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Penghuni</h3>
    </header>

    <form action="proses_editt.php" method="POST">

        <fieldset>
        <!-- <p>
            <label for="id_penghuni">Id Penghuni </label>
            <input type="number" name="id_penghuni" placeholder="angka" value="<?//php echo $penghuni['id_penghuni'] ?>" />
        </p> -->
        <input type="hidden" name="id" value="<?php echo $penghuni['id_penghuni'] ?>" />
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $penghuni['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $penghuni['alamat'] ?></textarea>
        </p>
        <p>
            <label for="Sex">Jenis Kelamin: </label>
            <?php $jk = $penghuni['Sex']; ?>
            <label><input type="radio" name="Sex" value="Laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="Sex" value="Perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="no_hp">No Hp: </label>
            <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" value="<?php echo $penghuni['no_hp'] ?>" />
        </p>
        <p>
            <label for="pekerjaan">pekerjaan: </label>
            <input type="text" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $penghuni['pekerjaan'] ?>" />
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
