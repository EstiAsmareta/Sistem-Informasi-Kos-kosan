<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: listBayar.php');
}

//ambil id dari query string
$id_pembayaran = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pembayaran WHERE id_pembayaran=$id_pembayaran";
$query = mysqli_query($link, $sql);
$bayar = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir edit data pembayaran</title>
</head>

<body>
    <header>
        <h3>Formulir Edit pembayaran</h3>
    </header>

    <form action="proses_editBayar.php" method="POST">

        <fieldset>

        <p>
            <label class="text" for="id_pembayaran">id pembayaran </label>
            <input class="textbox_idPembayaran" type="text" name="id_pembayaran" placeholder="masukkan id pembayaran" value="<?php echo $bayar['id_pembayaran'] ?>" />
        </p>
        <p>
            <label class="text" for="kode_transfer">kode transfer</label>
            <input class="textbox_transfer" type="text" name="kode_transfer" placeholder="ex: 42323543" value="<?php echo $bayar['kode_transfer'] ?>"/>
        </p>
        <p>
            <label class="text" for="bank">Nama Bank: </label>
            <?php $bank = $bayar['bank']; ?>
            <select class="textbox_bank" name="bank">
                <option class="text">BCA</option>
                <option class="text">Mandiri</option>
                <option class="text">BTPN</option>
                <option class="text">BNI</option>
                <option class="text">BRI</option>
            </select>
        </p>
        <p>
            <label class="text"for="tipe_pembayaran">Tipe pembayaran: <br></label>
            <?php $tipe_pembayaran = $bayar['tipe_pembayaran']; ?>
            <label class="text"><input type="radio" name="tipe_pembayaran" value="cash" <?php echo ($tipe_pembayaran == 'cash') ? "checked": "" ?>> cash <br></label>
            <label class="text"><input type="radio" name="tipe_pembayaran" value="credit" <?php echo ($tipe_pembayaran == 'credit') ? "checked": "" ?>> credit </label>
        </p>
        <p>
            <label class="text" for="konfirmasi">konfirmasi pembayaran: <br></label>
            <?php $konfirmasi = $bayar['konfirmasi']; ?>
            <label class="text"><input type="radio" name="konfirmasi" value="ya" <?php echo ($konfirmasi == 'ya') ? "checked": "" ?>> iya <br></label>
            <label class="text"><input type="radio" name="konfirmasi" value="tidak" <?php echo ($konfirmasi == 'tidak') ? "checked": "" ?>> tidak </label>
        </p>
        <p>
            <input class="tb_bayar" type="submit" value="simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>