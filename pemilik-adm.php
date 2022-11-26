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
            <div class="header">Informasi Pemilik Kos</div>  
        </div>
    </div>
        <div class="info">
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
        <?php echo mysqli_num_rows($query) ?>
    </nav>-->
    </body>
</html> 

