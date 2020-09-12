<?php

require '../functions/functions.php';

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '../index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = '../index.php';
            </script>
            ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        * {
            margin: 3px;
            padding: 2px;
            
        }
        input {
            max-width: 500px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Buku</h1>

    <form action="" method="post">
    
        <div div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" name="judul" class="form-control" id="judul" required>
        </div>
            <div div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="number" name="isbn" class="form-control" id="isbn" required>
        </div>
            <div div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" required>
        </div>
            <div div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" id="pengarang" required>
        </div>
            <div div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
    </form>
    


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