<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kos</title>
    <link rel="stylesheet" type="text/css" href="kos.css">
</head>

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
        <div class="header">Data Kos</div>  
    </div>
    </div>
    <br>
    <div class="gabung">
        <div class="maintb">
        <table class="tabel1", width="850px">
        <thead >
            <tr>
                <th width="90px">Kode Kos</th>
                <th width="100px">Nama</th>
                <th width="100px">Alamat</th>
                <th width="100px">Jenis Kost</th>
                <th width="100px">Fasilitas</th>
                <th width="90px">Tipe</th>
                <th width="90px">Biaya</th>
                <th width="90px">ID Pemilik</th>
                <th width="90px">Status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM kos";
            $query = mysqli_query($link, $sql);

            while($kos = mysqli_fetch_array($query)){
                echo "<td>".$kos['kode_kos']."</td>";
                echo "<td>".$kos['nama_kos']."</td>";
                echo "<td>".$kos['alamat']."</td>";
                echo "<td>".$kos['jenis_kos']."</td>";
                echo "<td>".$kos['fasilitas']."</td>";
                echo "<td>".$kos['tipe']."</td>";
                echo "<td>".$kos['biaya']."</td>";
                echo "<td>".$kos['id_pemilik']."</td>";
                echo "<td>".$kos['status']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
        </div>
        <div class="maintb">
        <ul class="ulist">
            <li class="rincian">
                <a href="kamarkosberkah-adm.php"><button class="button">Lihat Kos Berkah</button></a></li>
            <li class="rincian">
                <a href="kamarKosBatavia-adm.php"><button class="button">Lihat Kos Batavia</button></a></li>
            <li class="rincian">
                <a href="kamarKosCitra-adm.php"><button class="button">Lihat Kos Citra</button></a></li>
            <li class="rincian">
                <a href="kamarKosKirana-adm.php"><button class="button">Lihat Kos Kirana</button></a></li>
            <li class="rincian">
                <a href="kamarkosorange-adm.php"><button class="button">Lihat Kos Orange</button></a></li>
            <li class="rincian">
                <a href="kamarKosSenja-adm.php"><button class="button">Lihat Kos Senja</button></a></li>
        </ul>
        </div>
    </div>
    </tbody>
    <?php echo mysqli_num_rows($query) ?>
    </body>
</html>