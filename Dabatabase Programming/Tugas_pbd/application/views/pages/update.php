<div class= "container col-md-10">
  <div class="col-md-12">
    <h2>Edit Profil</h2>
  	<?php foreach($mahasiswa as $u){ ?>
    <form class="form" action="<?php echo site_url('pages/haha/') ?>" method="post">
      <div class="form-group">
        <label class="control-label">NIM</label>
        <input type="hidden" name="id" value="<?php echo $u->id ?>">
        <input type="text" name="nim" class="form-control" value="<?php echo $u->nim?>">
      </div>

      <div class="form-group">
        <label class="control-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
      </div>

      <div class="form-group">
        <label class="control-label">alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>">
      </div>
      <div class="form-group">
        <label class="control-label">Password</label>
        <input type="password" name="password" class="form-control" value="">
      </div>
      <div class="form-group">
        <label class="control-label">ID Matkul</label>
        <input type="text" name="id_matkul" class="form-control" value="<?php echo $u->id_matkul ?>">
      </div>

      <input type="submit" name="submit" class="btn btn-success" value="Simpan">

    </form>
    <?php } ?>
  </div>
</div>