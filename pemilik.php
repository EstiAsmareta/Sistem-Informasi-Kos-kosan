<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>pemilik</title>
    <link rel="stylesheet" type="text/css" href="coba.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Kontrakin</h2>
            <ul>
            <li><a href="home-page.php"></i>Home</a></li> 
            <li><a href="kos.php">Lihat Kos</a></li>
            <li><a href="bayar.php">Pembayaran</a></li>
            <li><a href="pemilik.php">Pemilik Kos</a></li>
            <li><a href="DaftarPenyewa.php">Daftar</a></li>  
            <li><a href="logout.php" class="btn">Logout</a></li>
            </ul> 
            <div class="social_media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        </div>
        <div class="main_content">
            <div class="header">Informasi Pemilik Kos</div>  
        </div>
    </div>
    <table class="tabel1">
    <thead >
        <tr>
            <th>Id Pemilik</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pemilik_kos";
        $query = mysqli_query($link, $sql);

        while($pemilik = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pemilik['id_pemilik']."</td>";
            echo "<td>".$pemilik['nama']."</td>";
            echo "<td>".$pemilik['no_telp']."</td>";
            echo "<td>".$pemilik['alamat']."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    <span><?php echo mysqli_num_rows($query) ?>
    </body>
</html> 

