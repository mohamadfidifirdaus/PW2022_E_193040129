<?php

    // array
    // variabel yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key nya adalah index, yang di mulai dari nol

    // membuat array
    // cara lama
    $hari = array("Senin", "selasa", "Rabu" );
    
    // cara baru
    $bulan = ["Januari", "Febuari", "Maret"];
    $arr1 = [123, "tulisan", false];

    // menampilkan Array
    // var_dum() / print_r()

    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo"<br>";

    // menampilkan satu elemen pada array
    // echo $arr1[0];
    // echo $bulan[1];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    echo "<br>";
    var_dump($hari);






?>