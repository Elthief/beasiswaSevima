<?php

require '../functions/functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM buku WHERE 
            judul LIKE '%$keyword%' OR
            isbn LIKE '%$keyword%' OR
            tahun_terbit LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%' 
            ORDER BY judul ASC";
$buku = query($query);

?>

<div class="container " id="container">
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
