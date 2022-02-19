<?php

//Pertemuan 2 - PHP Dasar
// Sintaks PHP

/* 

Standar Output
echo, print
print_r
var_dump

*/

echo "Mohamad Fidi Firdaus" ;


//penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// tidak boleh di awali dengan angka, tapi boleh mengandung angka


//Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;


// Operator penggabung string / concatenation / concat
// . 
$nama_depan = "Mohamad Fidi";
$nama_belakang = "Firdaus";

echo $nama_depan . $nama_belakang;


// Assignment
// =, +=, -=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;

$nama = "Mohamad Fidi";
$nama .= " ";
$nama .= "Firdaus";
echo $nama;


// Perbandingan
//<, >, <=, >=, ==, !=
var_dump(1 == "1");

// identitas
// ===, !==

var_dump(1 === "1");


// logika
// &&, ||, !
$x = 30;
var\($x < 20 && $x % 2 == 0);


$nama = "mohamad fidi firdaus";

echo "Halo, Nama saya $nama";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Belajar PHP </title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?> </h1>
    
</body>
</html>

