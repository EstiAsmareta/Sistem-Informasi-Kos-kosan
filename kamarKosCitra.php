<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kos Citra</title>
    <link rel="stylesheet" type="text/css" href="kamarKos.css">
</head>

<body>
    <div class="wrapper">
        <div class="main_content">
            <div class="header">Status kamar Kos</div>  
        </div>
    </div>
    <div class="info">
        <table class="tabel1", width="200px">
        <thead >
            <tr>
                <th width="100px">No Kamar</th>
                <th width="100px">Status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM kamar_citra";
            $query = mysqli_query($link, $sql);

            while($kamar_kos = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$kamar_kos['No_Kamar']."</td>";
                echo "<td>".$kamar_kos['status']."</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
        </table>
    <nav>
        <a href="kos.php">
        <button class="button">kembali</button></a>
        <a href="DaftarPenyewa.php">
        <button class="btbayar">Sewa Kamar</button></a>
    <nav>
    </div>
</body>
</html> 