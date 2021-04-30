<?php
/* 
    Ahmad Reyhan Ronaldo
    203040162
    https://github.com/chatial/pw2021_203040162.git
    Pertemuan 5( 23Februari 2021 )
    Materi Minggu ini mempelajari mengenai Array
*/
?>

<?php
$mahasiswa = [
    ["Ahmad Reyhan Ronaldo", "203040162", "TIF", "chatialfc@gmail.com"],
    ["slebeww", "203040152", "TI", "slebew@gmail.com"],
    ["bibi", "203040153", "TM", "bubu@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>