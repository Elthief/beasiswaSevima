<?php 
function curl($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
}

$curl = curl("https://dekontaminasi.com/api/id/covid19/hospitals");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Rujukan Covid 19</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .jumbotron {
            background: url('https://arsitagx-master.s3.ap-southeast-1.amazonaws.com/img-large/15219/10229/decimaarsitek-rumah-sakit-phc-surabaya1544601867-l.jpeg');
            height: 500px;
            background-size: cover;
            background-position: bottom;
            text-align: center;
        }
        .container h1 {
            margin-top: 140px;
            color: white;
            font-weight: 500;
        }
        .container p {
            color: white;
            font-size: 25px;
            font-weight:400;
        }
    </style>
</head>
<body>

<header>
    <app-bar></app-bar>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">Daftar Rumah Sakit Rujukan Covid</h1>
        <p class="lead">Bersama kita lawan Covid-19</p>
        </div>
</header>

<main>

    <div class="container">
        <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Rumah Sakit</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">No Telp.</th>
        <th scope="col">Provinsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach($data as $row) : ?>
        <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $row["name"]; ?></td>
        <td><?= $row["address"]; ?></td>
        <td><?= $row["region"]; ?></td>
        <td><?= $row["phone"]; ?></td>
        <td><?= $row["province"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
    </div>

</main>



</table>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./app.js" type="module"></script>
</body>
</html>