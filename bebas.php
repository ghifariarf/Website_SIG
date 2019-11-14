<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="file" name="gambar">

        <button type="submit" name="input">input</button>
    </form>

<?php
include 'koneksi.php';
    if(isset($_POST['input']))
    {
        $id = $_SESSION['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $nama_file   = $_FILES['gambar']['name'];
        
        $folder = "gambar/$nama_file";

        if (move_uploaded_file($lokasi_file,"$folder")){
        $sql = "INSERT INTO `gambar`(`id`, `nama`, `username`, `id_user`, `gambar`, `password`) VALUES ('','$nama','$username','$id','$nama_file','$password')";
        mysqli_query($koneksi,$sql);
        var_dump($sql);
        die;
      
        }

        else{
        $sql = "INSERT INTO `gambar`(`id`, `nama`, `username`, `password`) VALUES ('','$nama','$username','$password')";
        mysqli_query($koneksi,$sql);
            echo "<script> alert('Pendaftaran Gagal');</script>";
        }
}
?>
                   
</body>
</html>