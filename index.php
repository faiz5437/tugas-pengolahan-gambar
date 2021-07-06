<?php 
require 'function.php';
$gambar = query("SELECT * FROM gambar");
$idLink = query( "SELECT * FROM gambar ORDER BY id ");
if (isset ($_POST["submit"])){
    // var_dump($_POST);
   
    //  var_dump($_POST); 
    //  var_dump($_FILES); die;
   
    if(tambah($_POST) > 0 ){
    //  var_dump($_FILES); die;

    echo "
        <script>
        alert('Gambar Berhasil Ditambahkan! Silahkan Klik Oke');
        document.location.href = 'set.php'
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
    <link rel="stylesheet" href="utama3.css">
    <script src="https://kit.fontawesome.com/9ff135b1c3.js" crossorigin="anonymous"></script>
    <title>Tugas Pengolahan Citra</title>
    <style>
  <?php include "utama3.css" ?>
</style>
</head>
<body>
    <div class="info">
        <i class="fas fa-info-circle" id="info"></i>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">TUGAS PENGOLAHAN CITRA</h5><br>
                    <h6 class="card-subtitle mb-2 text-muted">Program Studi Teknik Informatika</h6>
                    <h6 class="card-subtitle mb-2 text-muted">ARS University</h6><br>
                    <p class="card-text">Nama Kelompok : <br><br>Muhamad Faiz<br>Nisa Handiani<br>Mochamad Zien Hasan<br>Ahmad Abdul Malik<br>Rifqi Muhammad Fadholi</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
    </div>
  
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div id="wrapper">
                        <h1>Web Pengolahan Gambar Sederhana</h1>
                        <h3>Silahkan Masukkan Gambar Anda</h3>
                        <input type="file" accept="image/*" onchange="preview_image(event)" style="display:block;" class="upload" id="btn" name="gambar">
                        <button style="display:none;" id="uplo" class="preview" type="submit" name="submit">Upload</button>
                        <!-- <div class="frame"> -->
                            <div class="pre_img">
                                <img id="output_image"/>
                            </div> 
                        <!-- </div> -->
                    </div>
                    <script type='text/javascript'>
                                function preview_image(event) 
                                {
                                    var btn = document.getElementById('btn');
                                    var uplo = document.getElementById('uplo');
                                    var displaySetting = btn.style.display;
                                    var displaySetting2 = uplo.style.display;
                                    if (displaySetting == 'block' && displaySetting2 == 'none') {
                                        btn.style.display = 'none';
                                        uplo.style.display = 'block';
                                    } else {
                                        btn.style.display = 'block';
                                        uplo.style.display = 'none';
                                    }
                                var reader = new FileReader();
                                reader.onload = function()
                                {
                                var output = document.getElementById('output_image');
                                output.src = reader.result;
                                }
                                reader.readAsDataURL(event.target.files[0]);
                                }
                    </script>
    </div>
       
    </form>

        
       
    </body>
</html>