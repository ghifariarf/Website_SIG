<?php 
$title = "Daftar Sekolah";
include_once "header.php";
include_once "koneksi.php"; 

?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <td class="ctr" >
             
         <!--  <a href="tambahdata.php"  class="btn btn-primary" style="margin: 5px;"> Tambah Data</a>
              -->
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="30%">Nama Sekolah</th>
                  <!-- <th width="10%">Kategori</th> -->
                  <th width="13%">Kota</th>
                  <th width="20%">Alamat</th>
                  <th width="27%">Peta</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/gis/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_sekolah; ?></td>
                <!-- <td><?php echo $item->kategori; ?></td> -->
                <td><?php echo $item->kota; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="detail.php?id=<?php echo $item->id_sekolah; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php include_once "footer.php" ?>

