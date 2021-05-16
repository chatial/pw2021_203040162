<?php
/*
    Ahmad Reyhan Ronaldo
    203040162
    Jumat,13.00
*/
?>

<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
    
</head>
<body>

<div class="container mt-3">
  <h1>NOVEL</h1>
  <div class="card" style="width: 45rem">
    <div class="card-body">
      <div class="row">
        <div class="col md-6">
          <?php foreach( $books as $row ) : ?>
            <p class="judul">
              <a href="php/detail.php?id=<?= $row['id'] ?>">
                <img src="img/<?= $row["img"]; ?>">
              </a>
            </p>  
          <?php endforeach;  ?>
        </div>
      </div>
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