<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
// $kat="";
$web="";
$hp="";
$alamat="";
$kec="";
$kel="";
$kota="";
$prov="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_sekolah;
  $ids.=$item->id;
  // $kat.=$item->kategori;
  $web.=$item->website;
  $hp.=$item->no_telp;
  $alamat.=$item->alamat;
  $kota.=$item->kota;
  // $kel.=$item->kelurahan;
  $kec.=$item->kecamatan;
  // $prov.=$item->provinsi;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}


$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>ITEM</th>
                 <th>DETAIL</th>
               </tr>
               <tr>
                 <td>Nama Sekolah</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <!-- <tr>
                 <td>Kelurahan</td>
                 <td><h4><?php echo $kel ?></h4></td>
               </tr> -->
               <tr>
                 <td>Kecamatan</td>
                 <td><h4><?php echo $kec ?></h4></td>
               </tr>
               <tr>
                 <td>Kota</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <!-- <tr>
                 <td>Provinsi</td>
                 <td><h4><?php echo $prov ?></h4></td>
               </tr> -->
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h4></td>
               </tr>
               <form action="" method="post" enctype="multipart/form-data">
               <tr>
                 <td> Masukkan Dokumen:</td>
                  <td><h6>
                  <input type="file" name="gambar"  /></h6></td>
                  
               </tr>
                <tr>
                  <td><h6>
                  <button type="submit" name="upload" class="tombol" /> Upload </button>
                  </h6></td>
               
                </tr>
               </form>
               </table>

            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>
      <?php
               include 'koneksi.php';
                    if(isset($_post['upload']))
                    {
                      $id = $_SESSION['id'];
                      $lokasi_file = $_FILES['gambar']['tmp_name'];
                      $nama_file   = $_FILES['gambar']['name'];

                      $folder = "gambar/$nama_file";

                      if (move_uploaded_file($lokasi_file, $folder))
                      {
                        $sql = "INSERT INTO `gambar`(`id`,`id_user`,`gambar`) VALUES ('', '$id', '$nama_file')";
                        mysqli_query($koneksi,$sql);
                        
                        var_dump($sql);
                        die;
                      }
                    }
                    ?>