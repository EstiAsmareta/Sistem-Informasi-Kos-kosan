<!DOCTYPE html>
<html>
<head>
    <title>bayar kosan</title>
    <link rel="stylesheet" type="text/css" href="hasilBayar.css">
</head>

<body>
    <header>
        <h1>Status</h1>
        <h3>pembayaran kosan</h3>
    </header>
    <div class="status">
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "pembayaran berhasil!";
            } else {
                echo "pembayaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </div>
    <div class="menu">
        <h4>Menu</h4>
            <ul>
                <li><a href="bayar.php">bayar lainnya</a></li>
                <li><a href="listBayar.php">lihat list pembayaran</a></li>
            </ul>
    </div>
    </body>
</html>