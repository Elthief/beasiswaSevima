<?php

require 'functions/functions.php';

$buku = query("SELECT * FROM buku ORDER BY judul ASC");

if(isset($_POST["cari"])) {
    $buku = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku di Perpustakaan Madani</h1>

    <a href="crud/tambah.php">
        <button type="button" class="btn btn-primary">Tambah Data Buku</button>
    </a>
    <br>
    <form class="form-inline" action="" method="post">
        <input class="form-control mr-sm-2" name="keyword" id="keyword" type="text" size="50" placeholder="Cari Buku" aria-label="Search" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" name="cari" id="tombol-cari" type="submit">Cari</button>
        <img src="./img/loader.gif" alt="" class="loader">
    </form>
    <br>
     <div class="container col-lg-6" id="container">
        <?php $i = 1 ?>
        <?php foreach($buku as $bk) : ?>
        <ul class="list-group">          
            <li class="list-group-item">
                <?= $i; ?> |
                <?= $bk["judul"]; ?>
                <a href="crud/hapus.php?id=<?= $bk["id"]; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda yakin ingin menghapus data buku <?= $bk["judul"]; ?> ?')">hapus</a>
                <a href="crud/ubah.php?id=<?= $bk["id"]; ?>" class="badge badge-success float-right ml-1" >Ubah</a>
                <a href="crud/detail.php?id=<?= $bk["id"]; ?>" class="badge badge-primary float-right ml-1">detail</a>
            </li>
        </ul>
        <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>


