<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Order</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <div class="container">
        <div class="konfirmasi-order">
            <h2>Konfirmasi Order</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nama = $_POST['nama'];
                $jeniskamera = $_POST['jeniskamera'];
                $noTelp = $_POST['noTelp'];
                $alamat = $_POST['alamat'];
                $date = $_POST['date'];

                $data = "Nama: $nama | Jenis Kamera: $jeniskamera | No Telp: $noTelp | Alamat: $alamat | Tanggal: $date\n";
                $file = fopen('order.txt', 'a');
                fwrite($file, $data);
                fclose($file);

                echo "<p>Terima kasih, Order Anda berhasil dicatat.</p>";
                echo "<p>Detail Order:</p>";
                echo "<ul>";
                echo "<li><strong>Nama:</strong> $nama</li>";
                echo "<li><strong>Jenis Kamera:</strong> $jeniskamera</li>";
                echo "<li><strong>No Telp:</strong> $noTelp</li>";
                echo "<li><strong>Alamat:</strong> $alamat</li>";
                echo "<li><strong>Tanggal:</strong> $date</li>";
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</body>
</html>
