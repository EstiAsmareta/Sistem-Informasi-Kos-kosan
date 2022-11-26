<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kos Batavia</title>
    <link rel="stylesheet" type="text/css" href="kamarKosBatavia.css">
</head>

<body>
    <div class="wrapper">
        <div class="main_content">
                <div class="header">Informasi Kosan</div>  
        </div>
    </div>
    <br>
    <table class="tabel1", width="200px">
    <thead >
        <tr>
            <th width="100px">No Kamar</th>
            <th width="100px">Status</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM kamar_batavia";
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
    
    <a href="kos-adm.php">
    <button class="button">Kembali</button></a>
    </body>
</html> 