<?php 
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>list pembayaran</title>
    <link rel="stylesheet" type="text/css" href="listBayar.css">
</head>

<body>
    <div class="wrapper">
            <div class="main_content">
                <div class="header">Status kamar Kos</div>  
            </div>
    </div>
    <div class="info">
    <table class="tabel1">
    <thead >
        <tr>
            <th width="50px">ID Pengguna</th>
            <th width="100px">Nama Pengguna</th>
            <th width="70px">Nama Kos</th>
            <th width="80px">Kode kos </th>
            <th width="100px">Biaya</th>
            <th width="50px">Lama Sewa</th>
            <th width="100px">Nominal Pembayaran</th>
            <th width="100px">Kode Transfer</th>
            <th width="50px">Bank</th>
            <th width="100px">Tipe Pembayaran</th>
            <th width="100px">Tanggal Transaksi</th>
            <th width="50px">Status</th>
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
            echo "<td>".$bayar['nama_kos']."</td>";
            echo "<td>".$bayar['kode_kos']."</td>";
            echo "<td>".$bayar['biaya']."</td>";
            echo "<td>".$bayar['lama']."</td>";
            echo "<td>".$bayar['nominal']."</td>";
            echo "<td>".$bayar['kode_transfer']."</td>";
            echo "<td>".$bayar['bank']."</td>";
            echo "<td>".$bayar['tipe_pembayaran']."</td>";
            echo "<td>".$bayar['tgl_transaksi']."</td>";
            echo "<td>".$bayar['konfirmasi']."</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
    <p><button class="total"> Total: <span><?php echo mysqli_num_rows($query) ?></span></button></p>

    <nav>
        <a href="home-page.php">
        <button class="button">Selesai</button></a>
    </nav>
    </div>
    </body>
</html> 

