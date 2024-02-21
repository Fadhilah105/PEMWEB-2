<?php
//ARRAY INDEX
//membuat variabel
$mahasiswa1 = ['Fadhilah Maidaniyah','Sistem Informasi',001,[3.6, 3.5, 4.0]];

//panggil variabel
echo 'Nama:'.$mahasiswa1[0]."<br>"; //concatenation
echo "Jurusan: $mahasiswa1[1] <br>"; //string interpolation (hanya bisa menggunakan kutip dua)
echo "IPS Semester 1:".$mahasiswa1 [3] [0];

