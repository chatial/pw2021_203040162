<?php
/* 
    Ahmad Reyhan Ronaldo
    203040162
    https://github.com/chatial/pw2021_203040162.git
    Pertemuan 7( 26 Februari 2021 )
    Materi Minggu ini mempelajari mengenai GET & POST
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Ahmad Reyhan Ronaldo", 
        "nrp" => "203040162",
        "email" => "ahmadreyhan.ronaldo@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "index.jpg"
    ],
    [
        "nama" => "Bambang", 
        "nrp" => "203040252",
        "email" => "GPtM@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "index.jpg"
    ]
];
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>