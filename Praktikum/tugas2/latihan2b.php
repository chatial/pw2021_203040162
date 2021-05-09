<?php
/*
    Ahmad Reyhan Ronaldo
    203040162
    Jum'at, 13.00 WIB
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2b</title>

    <style>
        .wrapper {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php

    $jawabanIsset = "Isset memiliki fungsi untuk memeriksa sutau variabel apakah sudah diatur atau belum. Fungsi isset bisa mengembalikan nilai false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty berfungsi sebagai penanda suatu kondisi. Contoh yang sering kita temukan dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class = "wrapper">
        <?= soal(""); ?>
    </div>
</body>

</html>