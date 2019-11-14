<?php 
$title = "Daftar Sekolah";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title">   
                Input Data Sekolah
              </h2>
            </div>
             
            <div class="panel-body">
              <form action="datauser.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama Sekolah</label>
      <input type="text" class="form-control" name="nama_sekolah" id="inputEmail4" placeholder="Nama Sekolah">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">No. Telp</label>
      <input type="text" class="form-control" name="no_telp" id="inputPassword4" placeholder="No. Telp">
    </div> 
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="Alamat Sekolah">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Kelurahan</label>
      <input type="text" class="form-control" name="kelurahan" id="inputCity" placeholder="Keluarahan">
    </div>
    <!-- <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> -->
    <div class="form-group col-md-4">
      <label for="inputCity">Kecamatan</label>
      <input type="text" class="form-control" name="kecamatan" id="inputCity" placeholder="Kecamatan">
    </div>
  <!--   <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
   -->

    <div class="form-group col-md-4">
      <label for="inputCity">Kota</label>
      <input type="text" class="form-control" name="kota" id="inputCity" placeholder="Kota">
    </div>


    <div class="form-group col-md-6">
      <label for="inputCity">Propinsi</label>
      <input type="text" class="form-control"  name="provinsi" id="inputCity" placeholder="Propinsi">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Website</label>
      <input type="email" class="form-control" id="inputCity" name="website" placeholder="Website Sekolah">
    </div>
    
 <!--  <div class="form-group col-md-12" class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->

  <div class="form-group col-md-11">
  <button type="button" name="input" class="btn btn-primary">Submit</button>
</div>
</form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>