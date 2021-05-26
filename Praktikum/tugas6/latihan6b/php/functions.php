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

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM book WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $img = htmlspecialchars($data["img"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $terbit = htmlspecialchars($data["terbit"]);
    $dimensi = htmlspecialchars($data["dimensi"]);

    $query = "UPDATE book SET
                img = '$img',
                judul = '$judul',
                pengarang = '$pengarang',
                terbit = '$terbit',
                dimensi = '$dimensi'
                WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM book
            WHERE
            judul LIKE '%$keyword%'
        ";
    return query($query);
}


function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE 
        username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar!')
            </script>";
        return false;
        }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT); 
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username'
    , '$password')");

    return mysqli_affected_rows($conn);






}















?>