<?php 
  include 'koneksi.php';
  if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
  $data  = mysqli_fetch_array($login);
  $level = $data['level'];

 if ($data['level']=="1"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    @$_SESSION['admin'] = $data['id'];
    $_SESSION['isLogin'] = 1;
    header('location:v_index.php');
  }
  else if ($data['level']=="2") {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $nama;
    @$_SESSION['user'] = $data['id'];
    $_SESSION['isLogin'] = 1;
    header('location:v_index.php');
  }
  else{
    header('location:index.php');
    echo "<script> alert('Gagal Login, Silahkan Login Kembali');</script>";
  }
  }
?>
