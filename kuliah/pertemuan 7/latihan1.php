<?php 

// variabel Scope

// $x = 10;


// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPER GLOBALS
// variabel global milik PHP
// merupakan Array Associative

// echo $_SERVER["SERVER_NAME"];


// $_GET

// $_GET["nama"] = "Mohamad Fidi Firdaus";
// $_GET["nrp"] = "193040129";
// var_dump($_GET);


// $_GET

$mahasiswa = [ 
    [
      "nama" => "Mohamad fidi firdaus", 
      "nrp" => "193040129", 
      "jurusan" => "Teknik Informatika",
      "email" => "mohamadfidi@gmail.com",
      "gambar" => "2.jpg"
    ],
    [
        "nama" => "Mohamad fajar", 
        "nrp" => "193040122", 
        "jurusan" => "Teknik Informatika",
        "email" => "fajar@gmail.com" ,
        "gambar" => "3.jpg"
      
    ]
      
    ];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs["nama"]; ?></a> 
        </li>
        <!-- <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>" > <li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
        </ul> -->
    <?php endforeach; ?>
    </ul>

</body>
</html>