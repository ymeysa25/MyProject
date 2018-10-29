<section class="content-header">
<div class= "container col-sm-10">
	<div class="row">
	<a type="button" class="btn" style="background-color: blue; color: white;" href="<?php echo site_url('create/create_dosen'); ?>" > Insert Data</a>
	<a  style=" color: blue;float: right;" href="<?php echo site_url('/pages/download_dosen'); ?>" > Download</a>
	</div>
	<table class="table table-striped table-bordered" >
		<thead>
		<!-- Judul kolom -->
			<tr>
			<th style="color: red">NIP</th>
			<th style="color: red">Nama</th>
			<th style="color: red">email</th>
			<th style="color: red">Opsi</th>
			</tr>
		</thead>
<tbody>
		<?php
		$no = 1;
		foreach ($data_dosen as $dosen) {
			?>
			<tr>
				<td> <?php echo $dosen->nip;?></td>
				<td> <?php echo $dosen->nama_dosen;?> </td>
				<td> <?php echo $dosen->email;?></td>
				<td>
					<button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $dosen->id_dosen;?>)">Edit</button>
					<a type="button" class="btn btn-sm btn-danger" href="<?php echo site_url('pages/delete_dosen/'. $dosen->id_dosen); ?>" >Delete</a>
				</td>

			</tr>
	<?php	} ?>
	</tbody>
</table>
</div>
</section>
