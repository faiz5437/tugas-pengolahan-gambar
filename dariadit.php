<?php 
require 'function.php';
$gambar = query("SELECT * FROM gambar");
if (isset ($_POST["submit"])){
    // var_dump($_POST);
   
    //  var_dump($_POST); 
    //  var_dump($_FILES); die;

if(tambah($_POST) > 0 ){
    echo "
        <script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href = 'index.html';
        </script>
    
    ";
}else{ 
    echo "<script>
    alert('Data Gagal Ditambahkan!');
    document.location.href = 'index.php';
    </script>";
}
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
    <title>Tugas Pengolahan Citra</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4BFFD5 ;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
        </nav>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="card" style="width: 17rem;">
            <?php foreach ($gambar as $img ):  ?>
                <img class="blackandwhite" src="<?= $img['gambar']; ?>" alt="Card image cap" style="margin-top: 5px;">
                <?php endforeach; ?>
            <div class="card-body">
                <h5 class="card-title" align="center">Gambar Asli</h5>
                    <a href="#" class="btn btn-primary">Download</a>
            </div>
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="blackandwhite">
                <?php endforeach; ?>
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="background-Alam">
            <?php endforeach; ?> 
            <div class="overlay">
                <div class="text">Ini ke2</div>
            </div>     
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="invert">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="hue-rotate ">
            <?php endforeach; ?>    
        </div>
        <hr style="opacity: 0%;">
        <hr style="opacity: 0%;">
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="sepia">
            <?php endforeach; ?>  
            <div class="overlay2">
                <div class="text">Hello World</div>
            </div>   
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="dropShadow">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="opacity">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="saturate">
            <?php endforeach; ?>    
        </div>
        <hr style="opacity: 0%;">
        <hr style="opacity: 0%;">
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="contrast">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="brightness">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="brightness">
            <?php endforeach; ?>    
        </div>
        <div class="col-3">
            <?php foreach ($gambar as $img ):  ?>
                <img src="<?= $img['gambar']; ?>" class="brightness">
            <?php endforeach; ?>    
        </div>
    </div>
</div>
</body>
</html>