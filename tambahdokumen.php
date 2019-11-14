<?php 
$title = "Daftar Sekolah";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title">   
                Upload Dokumen 
              </h2>
            </div>
             
            <div class="panel-body">
              <form action="datadokumen.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Dokumen</label>
      <input type="file" class="form-control" name="image">

    </div>
    
  <div class="form-group col-md-11">
 <input type="submit" value="Upload">
  
</div>
</form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>