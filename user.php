<?php 
$title = "Daftar Pengguna";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title">   
                <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
              </h2>
            </div>
              <a href="tambahuser.php" class="btn btn-primary" style="margin: 5px;">
                  Tambah User 
                </a>
               
                
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="20%">Nama Sekolah</th>
                  <th width="20%">Username</th>
                  <th width="20%">Email</th>
                  <th width="10%">Upload Dokumen</th> 
                 
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/sig/ambildatauser.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_sekolah; ?></td>
                <td><?php echo $item->username; ?></td> 
                <td><?php echo $item->email; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="datadokumen.php?id=<?php echo $item->id; ?>" rel="tooltip" data-original-title="Lihat File"  data-placement="top"  class="btn btn-primary">
                    Upload Dokumen</i> </a>&nbsp;
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

