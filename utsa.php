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

// Variabel untuk menyimpan total keseluruhan
$total_semua = 0;

// Menambahkan kolom 'Jumlah' untuk setiap item
foreach ($data_barang as &$item) {
    $item["Jumlah"] = $item["Stok"] * $item["Harga"];
    $total_semua += $item["Jumlah"];
}
unset($item); // Unset reference to avoid issues with the last element

// Menampilkan tabel beserta total
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach ($data_barang as $item) {
    echo "<tr>";
    echo "<td>{$item['ID']}</td>";
    echo "<td>{$item['Produk']}</td>";
    echo "<td>{$item['Stok']}</td>";
    echo "<td>" . number_format($item['Harga'], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($item['Jumlah'], 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<p><strong>Total Keseluruhan Jumlah: Rp " . number_format($total_semua, 0, ',', '.') . "</strong></p>";
?>