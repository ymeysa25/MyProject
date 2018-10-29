<div class= "container col-md-10">
  <div class="col-md-12">
    <h2>Edit Profil</h2>
  	
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
      </div>

      <div class="form-group">
        <label class="control-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
      </div>

      <div class="form-group">
        <label class="control-label">Password</label>
        <input type="password" name="password" class="form-control">
      </div>

      <div class="form-group">
        <label class="control-label">Foto</label>
        <input type="file" name="foto">
      </div>

      <input type="submit" name="simpan" class="btn btn-success" value="Simpan">

    </form>
  </div>
</div>