<?php
require_once('class_persegipanjang.php');

$persegiPanjang = new PersegiPanjang(8, 6);

echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegiPanjang->hitungKeliling();