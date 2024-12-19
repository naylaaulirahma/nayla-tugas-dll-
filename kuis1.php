<?php
function hitungDiskon($jumlahBayar) {
    // Menentukan besar diskon berdasarkan jumlah bayar
    if ($jumlahBayar >= 500000) {
        $diskon = 0.50;  // 50%
    } elseif ($jumlahBayar >= 100000) {
        $diskon = 0.10;  // 10%
    } elseif ($jumlahBayar >= 50000) {
        $diskon = 0.05;  // 5%
    } else {
        $diskon = 0.00;  // 0%
    }

    // Menghitung total diskon dan jumlah bayar setelah diskon
    $totalDiskon = $jumlahBayar * $diskon;
    $totalBayar = $jumlahBayar - $totalDiskon;

    // Menampilkan hasil
    echo "Jumlah Bayar: Rp" . number_format($jumlahBayar, 0, ',', '.') . "<br>";
    echo "Diskon: " . ($diskon * 100) . "%<br>";
    echo "Total Diskon: Rp" . number_format($totalDiskon, 0, ',', '.') . "<br>";
    echo "Total Bayar Setelah Diskon: Rp" . number_format($totalBayar, 0, ',', '.') . "<br>";
}

// Memproses input dari pengguna
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlahBayar = (float) $_POST['jumlah_bayar'];
    hitungDiskon($jumlahBayar);
}
?>

<!-- Form Input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Diskon</title>
</head>
<body>
    <h2>Program Penghitung Diskon</h2>
    <form method="POST">
        <label for="jumlah_bayar">Masukkan Jumlah Bayar: </label>
        <input type="number" name="jumlah_bayar" id="jumlah_bayar" required>
        <button type="submit">Hitung Diskon</button>
    </form>
</body>
</html>