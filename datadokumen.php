<?php 
$id = $_GET['id'];
include_once "ambildokumen_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$dok="";
foreach($obj->results as $item){
  $titles.=$item->nama_sekolah;
  $ids.=$item->id;
 $dok.=$item->image;
}


$title = "Dokumen : ".$titles;
include_once "header.php"; ?>

    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title">   
                Upload Dokumen
              </h2>
            </div>
             
            <div class="panel-body">
              <form action="" method="post" enctype="multipart/form-data">
         
    
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nama Sekolah</label>
      <input type="file" class="form-control" name="image" >
      <input type="submit" value="Upload">
    </div>
    
 <!--  <div class="form-group col-md-11">
  <button type="submit" name="input" class="btn btn-primary">Submit</button> -->
</div>
</form>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
   include_once "koneksi.php"; 
 
    $file = $_FILES['image']['tmp_name'];
 
    if(!isset($file)){
        echo 'Pilih file gambar';
    }else{
        $image      = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);
 
        if($image_size == false){
            echo 'File yang anda pilih tidak gambar';
        }else{
            if(!$insert = mysqli_query("INSERT INTO user VALUES(NULL, '$image_name', '$image')")){
                echo 'Gagal upload gambar';
            }else{
                //ambil id terakhir insert
                $lastid = mysqli_insert_id();
 
                echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="get.php?id='.$lastid.'">';
            }
        }
    }
    ?>

<?php include_once "footer.php" ?>