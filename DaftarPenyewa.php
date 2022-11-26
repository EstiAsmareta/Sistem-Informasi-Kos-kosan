<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="daftar1.css">
    <title>Formulir pendaftaran penyewa</title>
</head>

<body>
    <div class="wrapper">
        <div class="main_content">
                <div class="header">Formulir Pendaftaran Penyewaan</div>  
        </div>
    </div>
    <fieldset>
    <form action="poses_daftar.php" method="POST">
        <p>
            <label class="text"for="id_penghuni">ID: </label>
            <input class="textbox_nama" type="text" name="id_penghuni" placeholder="ID Pengguna" />
        </p>
        <p>
            <label class="text"for="nama">Nama: </label>
            <input class="textbox_nama" type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label class="text"for="alamat">Alamat: </label>
            <textarea class="textbox_alamat" name="alamat" placeholder="Alamat"></textarea>
        </p>
        <p>
            <label class="text"for="jenis_kelamin">Jenis Kelamin: <br></label>
            <label class="text"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br></label>
            <label class="text"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
        </p>
        <p>
            <label class="text"for="no_hp">Nomer Telephone: </label>
            <input class="textbox_nama" type="text" name="no_hp" placeholder="08xx xxxx xxxx" />
        </p>
        <p>
            <label class="text"for="pekerjaan">Pekerjaan: </label>
            <input class="textbox_nama" type="text" name="pekerjaan" placeholder="Pekerjaan" />
        </p>
        <p>
            <label class="text" for="nama_kosan">Nama Kosan: </label>
            <select class="textbox_nama" name="nama_kosan">
                <option class="text">Kos Batavia</option>
                <option class="text">Kos Berkah</option>
                <option class="text">Kos Citra</option>
                <option class="text">Kos Kirana</option>
                <option class="text">Kos Orange</option>
                <option class="text">Kos Senja</option>
            </select>
        </p>
        <p>
            <label class="text"for="kosan_no">Nomor Kosan: </label>
            <input class="textbox_nama" type="text" name="kosan_no" placeholder="Nomor Kosan" />
        </p>
        <p>
            <input class="tb_daftar" type="submit" value="Daftar" name="daftar" />
        </p>
        </form>
        <br>
        <a href="kos.php">
        <button class="button">Kembali</button></a>
        </fieldset>
    </body>
</html>