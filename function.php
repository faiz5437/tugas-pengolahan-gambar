<?php 
$conn = mysqli_connect ("localhost", "root", "", "gambar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
       
    }
    return  $rows;
}


function tambah ($data) {
    global $conn;

    // $nrp = htmlspecialchars($data["nrp"]);
    // $nama = htmlspecialchars($data["nama"]);
    // $email = htmlspecialchars($data["email"]);
    // $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);
 
    //upload gambar
    $gambar = upload();
    if (!$gambar ){
        return false;
    }
    $query = "INSERT INTO gambar 
                VALUES
                ('', '$gambar')";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);
}

function upload(){
//     var_dump($_FILES);
//    die; 
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error  = $_FILES['gambar']['error'];
    if($error == 4 ){
        echo "<script>
        alert('File Gambar Tidak ada');
        </script>";

        return false;
    }
    //cek gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array ($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
        // fungsi ini mengecek gambar
        //fungsi ini menghasilkan true jika ada
    }
    //cek ukuran file
    if($ukuranfile > 5000000){
        echo "<script>
        alert('gambar terlalu besar');
        </script>";
        return false;
    }
   //lolos pengecekkan gambar siap di upload
   //generate nama gambar baru
   $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

   
    move_uploaded_file($tmpName, ''.  $namaFileBaru);
    // var_dump($namaFileBaru); die;
    return $namaFileBaru;
}

// function hapus($id){
//     global $conn;
//     mysqli_query($conn, "DELETE FROM gambar WHERE id = $id");

//     return mysqli_affected_rows($conn);
// }

// function ubah ($data){
//     global $conn;
//     $id = $data["id"];
//     // $nrp = htmlspecialchars($data["nrp"]);
//     // $nama = htmlspecialchars($data["nama"]);
//     // $email = htmlspecialchars($data["email"]);
//     // $jurusan = htmlspecialchars($data["jurusan"]);
//     $gambarLama = ($data["gambarLama"]);


//     //cek apakah user pilih gambar baru atau tidak
//     if($_FILES['gambar']['error'] == 4){
//         $gambar = $gambarLama;
//     }else{
// $gambar = upload();
//     }
    
 
//     $query = "UPDATE gambar SET 
//                 -- nrp = '$nrp', 
//                 -- nama = '$nama',
//                 -- email = '$email',
//                 -- jurusan = '$jurusan',
//                 gambar = '$gambar'
//                 WHERE id = $id
//                 ";
    
//     mysqli_query($conn, $query);

// return mysqli_affected_rows($conn);

// }


// function cari($keyword){
//     $query = "SELECT * FROM gambar WHERE 
//     -- nrp LIKE '%$keyword%' OR
//     -- nama LIKE '%$keyword%' OR
//     -- email LIKE '%$keyword%' OR
//     -- jurusan LIKE '%$keyword%' 
    
//     ";

//     return query($query);
// }

// ?>