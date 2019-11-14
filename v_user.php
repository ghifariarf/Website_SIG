<?php
include 'koneksi.php';
    if(isset($_POST['user']))
    {
        $nama = $_POST['nama_sekolah'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $sql = "INSERT INTO `user`(`nama_sekolah`, `username`, `password`) VALUES ('','$nama', '$username', '$password')";
        mysqli_query($koneksi,$sql);
        header('location:user.php');
        
        }

        else{
        mysqli_query($koneksi,$sql);
        header('location:tambahuser.php');
        
            }

?>