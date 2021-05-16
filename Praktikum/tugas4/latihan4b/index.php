<?php
/*
    Ahmad Reyhan Ronaldo
    203040162
    Jumat,13.00
*/
?>

<?php 
//Menghubungkan ke server Database
$conn = mysqli_connect("localhost","root","");
//Memilih Database
$check = mysqli_select_db($conn, "pw_tubes_203040162");
//Melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4a</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
</head>
<body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <h1 class="display-4">NOVEL</h1>
        <table id="table" class="table table-bordered table-striped table-hover text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Terbit</th>
              <th>Dimensi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1 ?>
          <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><img width="200" src="img/<?= $row["img"]; ?>"></td>
              <td><?= $row["judul"] ?></td>
              <td><?= $row["pengarang"] ?></td>
              <td><?= $row["terbit"] ?></td>
              <td><?= $row["dimensi"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

</body>
</html>