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
     
// if (mysqli_affected_rows($conn) > 0 ){
//     echo "berhasil";
// }else{
//     echo "gagal".mysqli_error($conn);
// }

}

?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
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
<!-- <div class="container">
<input type="file" id="upload">
<label for="upload">Pilih Gambar</label>
</div> -->
<form action="" method="POST" enctype="multipart/form-data">
<li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" id="gambar" >
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </form>
    <?php foreach ($gambar as $img ):  ?>
      <img src="<?= $img['gambar']; ?>" style="width: 350px; height: 300 px;" >
        <div class="pic">
            <img src="<?= $img['gambar']; ?>" style="width: 350px; height: 300 px;" >
            <style type="grayscale">
                
</style>

</div>
<div class="row">
</div>
<div class="col-4">
  <img src="<?= $img['gambar']; ?>" class="cropped-image" style="width: 350px; height: 300 px;"/>
  <!-- <div class="background-Alam"> -->
    <img src="<?= $img['gambar']; ?>" style="width: 350px; height: 300 px;">
  <!-- </div> -->
  <!-- <div class="invert"> -->
    <img src="<?= $img['gambar']; ?>" style="width: 350px; height: 300 px;">
  <!-- </div> -->
</div>
<div class="hue-rotate">
<img src="<?= $img['gambar']; ?>" style="width: 350px; height: 300 px;">
</div>
   
<?php endforeach; ?>    
</body>
</html>