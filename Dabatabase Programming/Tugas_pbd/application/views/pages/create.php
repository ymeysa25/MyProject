<div class= "container col-md-10">
		<div class="col-md-12">
		<?php echo validation_errors(); ?>
			<?php echo form_open('pages/create') ?>
				<h2>Tambah Mahasiswa</h2>
				<div class="form-group">
						<label class="col-sm-2 control-label">NIM</label>
							<div class="col-sm-10">
									<input type="text" name='nim' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name='nama'></textarea> <br>
							</div>
						</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-10">
								<input type="text" name='alamat' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
								<input type="password" name='password' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
							<button type='submit' name='submit' class='btn btn-primary'>Simpan</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>