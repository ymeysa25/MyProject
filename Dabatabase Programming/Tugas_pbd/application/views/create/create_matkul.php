<div class= "container col-md-10">
		<div class="col-md-12">
		<?php echo validation_errors(); ?>
			<?php echo form_open('create/create_matkul') ?>
				<h2>Tambah Mata kuliah</h2>
				<div class="form-group">
						<label class="col-sm-2 control-label">ID Mata Kuliah</label>
							<div class="col-sm-10">
									<input type="text" name='id_matkul' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Mata Kuliah</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name='nama_matkul'></textarea> <br>
							</div>
						</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Beban SKS</label>
							<div class="col-sm-10">
								<input type="text" name='beban' class="form-control"><br>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Semester</label>
							<div class="col-sm-10">
								<input type="text" name='semester' class="form-control"><br>
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