<?php
include 'koneksi.php';
    if(isset($_POST['input']))
    {
        $nama = $_POST['nama_sekolah'];
        $website = $_POST['website'];
        $telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $kecamatan = $_POST['kecamatan'];
        $kota = $_POST['kota'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        
        $sql = "INSERT INTO `user`(`id`, `nama_sekolah`, `website`, `no_telp`, `alamat`, `username`, `kecamatan`, `kota`, `email`,`password`,`level`) VALUES ('','$nama', '$website', '$telp', '$alamat', '$username', '$kecamatan', '$kota', '$email','$password','$level')";
        mysqli_query($koneksi,$sql);
        header('location:user.php');
        
        }

        else{
        mysqli_query($koneksi,$sql);
        header('location:tambahuser.php');
        
            }

?>