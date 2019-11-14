<?php 
session_start();
if(!isset($_SESSION['isLogin'])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/Lambang_Kemdikbud.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Sistem Informasi Geografis Bantuan TIK</h1>
                <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat data penyebaran bantuan TIK sekolah</p>
        <div id="button">
            <a class="fa fa fa-user" href="logout.php"> Logout</a>
        </div>     
        
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>
    <?php 
                include 'koneksi.php';
                if (@$_SESSION['admin']) {
                  $user = @$_SESSION['admin'];
                }
                else if (@$_SESSION['user']) {
                  $user = @$_SESSION['user'];
                }
                $sql_login = mysqli_query($koneksi,"SELECT * FROM user WHERE id = '$user'");
                $data_login = mysqli_fetch_array($sql_login);
            ?>

    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="v_index.php"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
            <li><a href="data.php"><i class="fa fa-list-ul"></i> DATA SEKOLAH</a></li>
            <?php 
            if (@$_SESSION['admin']) { ?>
            <li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN BANTUAN TIK</a></li>
          <?php }  ?>
            <li><a href="user.php"> <i class="fa fa fa-user"></i> PENGGUNA</a></li> 
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>