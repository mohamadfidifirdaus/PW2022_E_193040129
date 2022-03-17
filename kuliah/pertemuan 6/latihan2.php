<?php

// $mahasiswa = [
//     ["Mohamad Fidi Firdaus", "193040129", "mohamadfditkj11@gmail.com", "Teknik Informatika"],
//     ["Mohamad Fajar", "193040122", "mohamadfajar@gmail.com", "Teknik Informatika"]

    
// ];

//asrray Associative
//definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri


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

<DOCTYPE html>
    <html>
        <head>
            <title>Daftar Mahasiswa</title>
        </head>
    
        <body>
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?=  $mhs["gambar"];  ?>">
                </li>
                <li>Nama :<?= $mhs["nama"]; ?></li>
                <li>NRP :<?= $mhs["nrp"]; ?></li>
                <li>Email :<?= $mhs["email"]; ?></li>
                <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            </ul>
            <?php endforeach; ?>

</body>
</html>