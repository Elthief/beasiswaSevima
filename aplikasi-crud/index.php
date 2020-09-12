<?php

require 'functions/functions.php';

$buku = query("SELECT * FROM buku ORDER BY judul ASC");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Buku di Perpustakaan Madani</h1>

    <a href="crud/tambah.php">
        <button type="button" class="btn btn-primary">Tambah Data Buku</button>
    </a>

     <div class="container col-lg-6" id="container">
        <?php $i = 1 ?>
        <?php foreach($buku as $bk) : ?>
        <ul class="list-group">          
            <li class="list-group-item">
                <?= $i; ?> |
                <?= $bk["judul"]; ?>
                <a href="crud/hapus.php?id=<?= $bk["id"]; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda yakin ingin menghapus data buku <?= $bk["judul"]; ?> ?')">hapus</a>
                <a href="#" class="badge badge-success float-right ml-1" >Ubah</a>
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
</body>
</html>


