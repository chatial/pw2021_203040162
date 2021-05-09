<?php
/*
    Ahmad Reyhan Ronaldo
    203040162
    Jum'at, 13.00 WIB
*/
?>
<?php

function hitungDeterminan ($a, $b, $c, $d)
{
    //Menampilkan Matriksnya
    echo "
        <table cellpadding='5' cellspacing='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
        </table>
    ";

    // Menghitung Determinannya
    echo "<br>";
    echo "<b>Determinan dari matriks tersebut adalah = " . (($a * $b) - ($b * $c)) . "</br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>

    <style>
        table {
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
    </style>
</head>

<body>
        <?= hitungDeterminan(1, 2, 3, 4); ?>
</body>
</html>