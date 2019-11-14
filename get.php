<?php
include 'koneksi.php';
$id = addslashes($_GET['id']);
 
//query ke database
$query = mysqli_query("SELECT * FROM user WHERE id='$id'");
$row = mysqli_fetch_assoc($query);
$image_db = $row['image'];
 
header("Content-type: image/jpeg");
 
echo $image_db;
?>