<?php
//tangkap input form
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

//Array harga produk
$harga = [
    'TV'=>4200000,
    'Kulkas'=>3100000,
    'Mesin Cuci' =>3800000,
];

//Hitung total harga (jumlah*harga produk)
$total = $jumlah*$harga[$produk];

//Format Rupiah
$total = number_format($total);

echo "Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: $total";

