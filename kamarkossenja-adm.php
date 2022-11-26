<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kos Senja</title>
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
            $sql = "SELECT * FROM kamar_senja";
            $query = mysqli_query($link, $sql);

            while($kamar_kos = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$kamar_kos['No_kamar']."</td>";
                echo "<td>".$kamar_kos['status']."</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
        </table>
    <nav>
        <a href="kos-adm.php">
        <button class="button">kembali</button></a>
        <nav>
    </div>
</body>
</html> 