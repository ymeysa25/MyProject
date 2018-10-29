<section class="content-header">
<div class= "container col-sm-10">
	<table class="table table-striped table-bordered" >
		<thead>
		<!-- Judul kolom -->
			<tr>
			<th style="color: red">NIP</th>
			<th style="color: red">Nama</th>
			<th style="color: red">email</th>
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
			</tr>
	<?php	} ?>
	</tbody>
</table>
</div>
</section>
