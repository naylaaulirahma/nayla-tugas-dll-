<?php
// Data Produk (ID, Produk, Stok, Harga)
$data_barang = [
    ["ID" => 1, "Produk" => "Buavita", "Stok" => 30, "Harga" => 10890],
    ["ID" => 2, "Produk" => "Bango", "Stok" => 21, "Harga" => 21890],
    ["ID" => 3, "Produk" => "Sariwangi", "Stok" => 10, "Harga" => 9990],
    ["ID" => 4, "Produk" => "Shampo Baby", "Stok" => 15, "Harga" => 21980],
    ["ID" => 5, "Produk" => "Bedak", "Stok" => 25, "Harga" => 14990],
    ["ID" => 6, "Produk" => "Baju Bayi", "Stok" => 5, "Harga" => 35980],
    ["ID" => 7, "Produk" => "Jumper", "Stok" => 25, "Harga" => 49990]
];

// Pesanan pelanggan
$pesanan = [
    ["Produk" => "Bedak", "Jumlah" => 15],
    ["Produk" => "Baju Bayi", "Jumlah" => 15],
    ["Produk" => "Buavita", "Jumlah" => 15],
    ["Produk" => "Shampo Baby", "Jumlah" => 10],
    ["Produk" => "Buavita", "Jumlah" => 3]
];

// Variabel untuk menyimpan total pembelian
$total_pembelian = 0;

// Menampilkan tanggal transaksi
echo "<h2>Tanggal Transaksi: 1 November 2024</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Produk</th><th>Jumlah</th><th>Subtotal</th></tr>";

// Menghitung subtotal untuk setiap produk dalam pesanan
foreach ($pesanan as $order) {
    foreach ($data_barang as $item) {
        if ($order["Produk"] == $item["Produk"]) {
            $subtotal = $order["Jumlah"] * $item["Harga"];
            $total_pembelian += $subtotal;
            
            // Menampilkan rincian setiap produk dalam pesanan
            echo "<tr>";
            echo "<td>{$order['Produk']} ({$order['Jumlah']} x)</td>";
            echo "<td>{$order['Jumlah']}</td>";
            echo "<td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>";
            echo "</tr>";
            break;
        }
    }
}

echo "</table>";

// Menghitung diskon berdasarkan total pembelian
$diskon = 0;
if ($total_pembelian >= 400000) {
    $diskon = 0.35 * $total_pembelian;
} elseif ($total_pembelian >= 250000) {
    $diskon = 0.20 * $total_pembelian;
}

// Total setelah diskon
$total_setelah_diskon = $total_pembelian - $diskon;

// Menampilkan total, diskon, dan total setelah diskon
echo "<p><strong>Total Pembelian: Rp " . number_format($total_pembelian, 0, ',', '.') . "</strong></p>";
echo "<p><strong>Diskon: Rp " . number_format($diskon, 0, ',', '.') . "</strong></p>";
echo "<p><strong>Total Pembayaran: Rp " . number_format($total_setelah_diskon, 0, ',', '.') . "</strong></p>";
?>