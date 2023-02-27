<?=validation_errors()?>
           <form class="row g-3" method="POST" action="<?=base_url('masyarakat/registrasi_user')?>">
 
  <div class="col-md-12">
  <div class="col-md-12">
    <label for="nik" class="form-label">Nik</label>
    <input type="text" class="form-control" id="nik" name="nik" require>
  </div>
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" require>
  </div>

  <div class="col-md-12">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" require>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" require>
  </div>
  <div class="col-md-12">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="text" class="form-control" id="telepon" name="telepon" require>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Daftar</button>
  </div>
</form> 
        </div>
    </div>
</div>
