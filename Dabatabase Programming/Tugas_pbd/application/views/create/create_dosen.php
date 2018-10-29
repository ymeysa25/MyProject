<div class= "container col-md-10">
		<div class="col-md-12">
		<?php echo validation_errors(); ?>
			<?php echo form_open('create/create_dosen') ?>
				<h2>Tambah Dosen</h2>
				<div class="form-group">
						<label class="col-sm-2 control-label">NIDN</label>
							<div class="col-sm-10">
									<input type="text" name='nip' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name='nama'></textarea> <br>
							</div>
						</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">email</label>
							<div class="col-sm-10">
								<input type="email" name='email' class="form-control"><br>
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