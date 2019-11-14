<?php 
$title = "Daftar Sekolah";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title">   
                Input Data Pengguna
              </h2>
            </div>
             
            <div class="panel-body">
              <form action="datauser.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nama Sekolah</label>
      <input type="text" class="form-control" name="nama_sekolah" id="inputEmail4" placeholder="Nama Sekolah">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Username</label>
      <input type="text" class="form-control" name="username" id="inputPassword4" placeholder="Username">
    </div> 
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" name="password" id="inputAddress" placeholder="Password">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="email" class="form-control" name="email" id="inputCity" placeholder="Email">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputCity">Website</label>
      <input type="text" class="form-control" name="website" id="inputCity" placeholder="Website">
    </div>

     <!-- <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> -->
   
    <div class="form-group col-md-2">
      <label for="inputCity">No. Telp</label>
      <input type="text" class="form-control" name="no_telp" id="inputCity" placeholder="No. Telp">
    </div>


    <div class="form-group col-md-6">
      <label for="inputCity">Alamat</label>
      <input type="text" class="form-control"  name="alamat" id="inputCity" placeholder="Alamat">
    </div>

    <div class="form-group col-md-3">
      <label for="inputCity">Kecamatan</label>
      <input type="text" class="form-control" id="inputCity" name="kecamatan" placeholder="Kecamatan">
    </div>
     
     <div class="form-group col-md-3">
      <label for="inputCity">Kota</label>
      <input type="text" class="form-control" id="inputCity" name="kota" placeholder="Kota">
    </div>

 <!--  <div class="form-group col-md-12" class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->

 <div class="form-group col-md-2">
      <label for="inputCity">Level</label>
      <input type="text" class="form-control" name="level" id="inputCity" placeholder="Sebagai admin / user">
    </div>

  <div class="form-group col-md-11">
  <button type="submit" name="input" class="btn btn-primary">Submit</button>
</div>
</form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>