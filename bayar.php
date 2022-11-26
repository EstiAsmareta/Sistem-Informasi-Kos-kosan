<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bayar1.css">
    <title>pembayaran</title>
</head>

<body>
    <div class="wrapper">
        <div class="main_content">
                <div class="header">Pembayaran</div>  
        </div>
    </div>
    <form action="proses_bayar.php" method="POST">

        <fieldset>


        <p>
            <label class="text" for="id_pembayaran">ID Pembayaran </label>
            <input class="textbox_idPembayaran" type="text" name="id_pembayaran" placeholder="Masukkan ID pembayaran" />
        </p>
        <p>
            <label class="text" for="id_penghuni">ID Pengguna </label>
            <input class="textbox_idPengguna" type="text" name="id_penghuni" placeholder="Masukkan ID pengguna anda" />
        </p>

        <p>
            <label class="text" for="kode_kos">Kode Kos</label>
            <input class="textbox_kodeKos" type="text" name="kode_kos" placeholder="masukkan Kode Kos" />
        </p>
        <p>
            <label class="text" for="lama">Lama Menyewa</label>
            <input class="textbox_lamaSewa" type="number" name="lama" placeholder=" "/>
        </p>
        <p>
            <label class="text" for="kode_transfer">Kode Transfer</label>
            <input class="textbox_transfer" type="number" name="kode_transfer" placeholder="ex: 42323543"/>
        </p>
        <p>
            <label class="text" for="bank">Nama Bank: </label>
            <select class="textbox_bank" name="bank">
                <option class="text">BCA</option>
                <option class="text">Mandiri</option>
                <option class="text">BTPN</option>
                <option class="text">BNI</option>
                <option class="text">BRI</option>
                <option class="text">None</option>
            </select>
        </p>
        <p>
            <label class="text"for="tipe_pembayaran">Tipe pembayaran: <br></label>
            <label class="text"><input type="radio" name="tipe_pembayaran" value="cash"> cash <br></label>
            <label class="text"><input type="radio" name="tipe_pembayaran" value="credit"> credit </label>
        </p>
        <p>
            <label class="text" for="konfirmasi">Konfirmasi pembayaran: <br></label>
            <label class="text"><input type="radio" name="konfirmasi" value="ya"> iya <br></label>
            <label class="text"><input type="radio" name="konfirmasi" value="tidak"> tidak </label>
        </p>
        <p>
            <input class="tb_bayar" type="submit" value="Bayar" name="bayar" />
        </p>
        <p></p>

        </fieldset>

    </form>

    </body>
</html>