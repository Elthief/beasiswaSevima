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

