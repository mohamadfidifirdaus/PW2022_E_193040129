<?php
    $mahasiswa = [
        ["Mohamad Fidi Firdaus", "193040129", "Teknik Informatika", "193040129.mohammad@mail.unpas.ac.id"],

        ["Dimas Aditya", "193040128", "Teknik Informatika", "193040129.mohammad@mail.unpas.ac.id"],
        ["Rafi Nuril", "203040129", "Teknik Informatika", "193040129.mohammad@mail.unpas.ac.id"]
  
];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>