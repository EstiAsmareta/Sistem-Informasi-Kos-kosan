<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Penyewa baru</title>
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
            <div class="header">Informasi Penghuni Kos</div>  
    </div>
    </div>
    <div class="info">
    <table class="tabel1">
    <thead >
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Handphone</th>
            <th>Pekerjaan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM penghuni";
        $query = mysqli_query($link, $sql);

        while($penyewa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$penyewa['id_penghuni']."</td>";
            echo "<td>".$penyewa['nama']."</td>";
            echo "<td>".$penyewa['alamat']."</td>";
            echo "<td>".$penyewa['Sex']."</td>";
            echo "<td>".$penyewa['no_hp']."</td>";
            echo "<td>".$penyewa['pekerjaan']."</td>";

            echo "<td>";
            echo "<a id='edit' href='edit.php?id=".$penyewa['id_penghuni']."'>Edit </a>";
            echo "<a id='hapus' href='hapus.php?id=".$penyewa['id_penghuni']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
    <p><button class="total"> Total: <span><?php echo mysqli_num_rows($query) ?></span></button></p>
    </body>
</html> 

