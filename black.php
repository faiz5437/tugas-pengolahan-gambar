<?php 
require 'function.php';
// $id = $_GET["id"];

$gambar = query("SELECT gambar FROM gambar order by id desc limit 1");
// var_dump($gambar); die;

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
    <link rel="stylesheet" href="style3.css">
    <title>Black and White</title>
    <style>
        <?php include "style3.css" ?>
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: none;">
        <a class="navbar-brand" href="set.php">Pengolahan Gambar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Halaman Awal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Tentang Kami</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="info.php"style="font-weight:bold;">Black and White</a>
                </li>
            </ul>
        </div>
        </nav>
        <div class="container" style="background-color : white; width : auto; height: 1000px; margin: 0px 200px;  text-align : center;">
            <h2 align="center" style="font-family: 'Trirong', serif; padding-top: 20px;">Pengolahan Gambar Sederhana</h2>
            <h5 align="center" style="font-family: 'Trirong', serif; font-size: 15px;">Kllik Gambar Untuk Download</h5>
		<ul class="topnav" align="center">
            <li>
                <a class="active" href="set.php">Kembali</a>
            </li>
            <li style="width:300px; height: 48px; margin-left:139px; padding-top: 17px; ">
                <h4 >Black and White</h4>
            </li>
		</ul>
            <br>
            <p>Hitam putih adalah istilah yang mengacu pada jumlah rupa monokrom dalam seni rupa, gambar hitam putih tidak betul-betul mengontraskan warna hitam dan putih. Hitam dan putih digabungkan dalam satu kontinuum yang menghasilkan serangkaian bayang abu-abu.</p>
            <br>
            <a href="<?= $gambar[0]['gambar']; ?>" download="Black And White">
        <img src="<?= $gambar[0]['gambar']; ?>" alt="" style="width: 80%; height : 70%; filter: grayscale(200%);
        filter: black;
        color-interpolation-filters: black;"><br></a>
            <br>
		</div>
<!-- <footer>
        <div >
            <small>Copyright &copy; 2020 - Muhamad Faiz. All Right Reserved </small>
        </div>
</footer> -->
</body>
</html>