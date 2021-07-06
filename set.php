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
    <link rel="stylesheet" href="style.css">
    <title>Tugas Pengolahan Citra</title>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: none;">
        <a class="navbar-brand" href="#">Pengolahan Gambar</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Halaman Awal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="info.php">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="col-12" style=" text-align:center;" >
            <h1>Selamat Datang Di pengolahan Gambar Kami</h1>
            <h4>Beberapa Macam Filter Gambar. Klik Gambar Untuk Info</h4>
        </div>
<div class="container"  >
    <div class="row" style="margin-top : 10px;">
    <div id="wrapper">					
<!-- Work -->

								
							<section id="casestudies" class="casestudies">
                            <a href="original.php">
									<article class="content">
										<div class="content-overlay"></div>
										<img class="content-image" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Gambar Asli</h2>
									</div>
								</article>
                            </a>
                            <a href="blur.php">
									<article class="content">
                                        <img class="content-image" id="blur" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Blur</h2>
									</div>
								</article>
                            </a>
                            <a href="invert.php">
									<article class="content">
                                        <img class="content-image" id="invert" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Invert</h2>
									</div>
								</article>
                            </a>
                            <a href="drop.php">
									<article class="content">
                                        <img class="content-image" id="dropShadow" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Shadow</h2>
									</div>
								</article>
                            </a>
                            <a href="hue.php">
									<article class="content">
                                        <img class="content-image" id="hue-rotate" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Hue Rotate</h2>
									</div>
								</article>
                            </a>
                            <a href="sepia.php">
									<article class="content">
                                        <img class="content-image" id="sepia" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Sepia</h2>
									</div>
								</article>
                            </a>
                            <a href="opacity.php">
									<article class="content">
                                        <img class="content-image" id="opacity" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Opacity</h2>
									</div>
								</article>
                            </a>
                            <a href="saturate.php">
									<article class="content">
                                        <img class="content-image" id="saturate" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Saturate</h2>
									</div>
								</article>
                            </a>
                            <a href="contrast.php">
									<article class="content">
                                        <img class="content-image" id="contrast" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Kontras</h2>
									</div>
								</article>
                            </a>
                            <a href="brightness.php">
									<article class="content">
                                        <img class="content-image" id="brightness" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Brightness</h2>
									</div>
								</article>
                            </a>
                            <a href="black.php">
									<article class="content">
                                        <img class="content-image" id="blackandwhite" src="<?= $gambar[0]['gambar']; ?>" alt="" />
										<div class="content-overlay"></div>
										 <div class="content-details fadeIn-bottom">
								    <h2 class="content-title">Black And White</h2>
									</div>
								</article>
                            </a>

							</section>
    </div>
</div>

<!-- <footer>
        <div >
            <small>Copyright &copy; 2020 - Muhamad Faiz. All Right Reserved </small>
        </div>
</footer> -->
</body>
</html>
