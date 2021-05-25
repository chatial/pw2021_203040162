<?php 
//Pengkoneksian menuju database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040162");

    return $conn;
}

//Melakukan query dan memasukannya ke Array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $img = htmlspecialchars($data["img"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $terbit = htmlspecialchars($data["terbit"]);
    $dimensi = htmlspecialchars($data["dimensi"]);

    $query = "INSERT INTO book
                VALUES 
             ('', '$img', '$judul', '$pengarang', '$terbit', '$dimensi')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>