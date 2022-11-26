<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Bayar Admin</title>
	<link rel="stylesheet" href="coba.css">
	
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Kontrakin</h2>
            <ul>
            <li><a href="home-page-adm.php">Home</a></li>
            <li><a href="kos-adm.php">Data Kos</a></li>
            <li><a href="listBayarAdm.php">Data Pembayaran</a></li>
            <li><a href="pemilik-adm.php">Data Pemilik Kos</a></li>  
            <li><a href="list_Penghuni.php">Data User</a></li>
            <li><a href="logout-adm.php">Logout</a></li>
            </ul> 
            <div class="social_media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        </div>
        <div class="main_content">
            <div class="header">Data Pembayaran Kosan</div>  
        </div>
    </div>
    <div class="info">
        <table class="tabel1">
        <thead >
            <tr>
                <th width="50px">ID Pembayaran</th>
                <th width="100px">Nama Pengguna</th>
                <th width="70px">Kode Kos</th>
                <th width="80px">Nama Kos</th>
                <th width="100px">Biaya</th>
                <th width="50px">Lama Sewa</th>
                <th width="100px">Nominal Pembayaran</th>
                <th width="100px">Kode Transfer</th>
                <th width="50px">Bank</th>
                <th width="100px">Tipe Pembayaran</th>
                <th width="100px">Tanggal Transaksi</th>
                <th width="20px">Status</th>
                <th width="115px">Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = " SELECT *,biaya*lama as nominal FROM pembayaran join penghuni on pembayaran.id_penghuni = penghuni.id_penghuni join kos on pembayaran.kode_kos=kos.kode_kos where konfirmasi='ya'";
            $query = mysqli_query($link, $sql);

            while($bayar = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$bayar['id_penghuni']."</td>";
                echo "<td>".$bayar['nama']."</td>";
                echo "<td>".$bayar['kode_kos']."</td>";
                echo "<td>".$bayar['nama_kos']."</td>";
                echo "<td>".$bayar['biaya']."</td>";
                echo "<td>".$bayar['lama']."</td>";
                echo "<td>".$bayar['nominal']."</td>";
                echo "<td>".$bayar['kode_transfer']."</td>";
                echo "<td>".$bayar['bank']."</td>";
                echo "<td>".$bayar['tipe_pembayaran']."</td>";
                echo "<td>".$bayar['tgl_transaksi']."</td>";
                echo "<td>".$bayar['konfirmasi']."</td>";
                

                echo "<td>";
                echo "<a id='edit' href='edit_bayar.php?id=".$bayar['id_pembayaran']."'>Edit </a>";
                echo "<a id='hapus' href='hapus_bayar.php?id=".$bayar['id_pembayaran']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
        </table>

        <p><button class="total"> Total: <span><?php echo mysqli_num_rows($query) ?></span></button></p>

        <nav>
            <a href="home-page-adm.php">
            <button class="button">Selesai</button></a>
        </nav>
    </div>
</body>
</html>