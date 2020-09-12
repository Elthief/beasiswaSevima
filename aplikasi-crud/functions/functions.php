<?php
$conn = mysqli_connect("localhost", "root", "", "hackathon");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    
    $judul = htmlspecialchars($data["judul"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);

    $query = "INSERT INTO buku VALUES 
            ('', '$judul', '$isbn', '$tahun_terbit',
            '$pengarang', '$penerbit')";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);

    $query = "UPDATE buku SET 
            judul = '$judul',
            isbn = '$isbn',
            tahun_terbit = '$tahun_terbit',
            pengarang = '$pengarang',
            penerbit = '$penerbit'
            WHERE id = $id ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM buku WHERE 
            judul LIKE '%$keyword%' OR
            isbn LIKE '%$keyword%' OR
            tahun_terbit LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%' 
            ";
    
    return query($query);
}
