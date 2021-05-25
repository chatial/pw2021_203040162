<?php
/*
    Ahmad Reyhan Ronaldo
    203040162
    Jumat,13.00
*/
?>

<?php
//Menghubungkan dengan file phplainnya
require 'functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5d</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
<h1>NOVEL</h1>

<a href="tambah.php">Tambah Data Buku</a>
<br><br>

   <table border="1" cellpadding="13" cellspacing="0">
            <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Terbit</th>
              <th>Dimensi</th>
              <th>Opsi</th>
            </tr>
          
          <tbody>
            <?php $i = 1 ?>
            <?php foreach ($books as $row) : ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><img src="../assets/img/<?= $row["img"]; ?>"></td>
                <td><?= $row["judul"] ?></td>
                <td><?= $row["pengarang"] ?></td>
                <td><?= $row["terbit"] ?></td>
                <td><?= $row["dimensi"] ?></td>
                <td>
                  <a href="ubah.php?id=<?= $row["id"]; ?>"><button class="btn btn-outline-primary rounded-pill">Ubah</button></a>
                  <a href="hapus.php?id=<?= $row["id"]; ?>"><button blueskylight class="btn btn-outline-danger rounded-pill">Hapus</button></a>
                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>