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
    <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
    <!-- <link rel="stylesheet" href="utama.css">q -->
    <script src="https://kit.fontawesome.com/9ff135b1c3.js" crossorigin="anonymous"></script>
    <title>Tugas Pengolahan Citra</title>
    <style>
  <?php include "utama2.css" ?>
</style>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4BFFD5 ;">
            <a class="navbar-brand" href="#">OUR WEB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="set.php">Pengolahan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
    </nav> -->
    <div class="info">
        <i class="fas fa-info-circle" ></i>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">TUGAS PENGOLAHAN CITRA</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Program Studi Teknik Informatika</h6>
                    <h6 class="card-subtitle mb-2 text-muted">ARS University</h6><br>
                    <p class="card-text">Nama Kelompok : <br><br>Muhamad Faiz<br>Nisa Handiani<br>Mochamad Zien Hasan<br>Rifqi Muhammad Fadholi</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>
    <h1>Web Pengolahan Gambar Sederhana</h1>
    <h3>Silahkan Masukkan Gambar Anda</h3>
    <div id="wrapper">
 <input type="file" accept="image/*" onchange="preview_image(event)">
</div>
<div class=""></div>
<img id="output_image"/>
    </form>


        
        <footer>
        <div >
            <small>Copyright &copy; 2020 - Muhamad Faiz. All Right Reserved </small>
        </div>
        </footer>
    </body>
</html>