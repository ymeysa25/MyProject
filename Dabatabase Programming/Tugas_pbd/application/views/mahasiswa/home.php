<!-- Content Header (Page header) -->
<section class="content-header">
		<table class="table table-striped table-bordered" >
			<thead>
			<!-- Judul kolom -->
				<tr>
				<th style="color: red">ID</th>
				<th style="color: red">NIDN</th>
				<th style="color: red">Nama</th>
				<th style="color: red">Alamat</th>
				<th style="color: red">id_matkul</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data_mahasiswa as $mahasiwa) {
				?>
					<tr>
						<td> <?php echo $mahasiwa->id;?></td>
						<td> <?php echo $mahasiwa->nim;?></td>
						<td> <?php echo $mahasiwa->nama;?> </td>
						<td> <?php echo $mahasiwa->alamat;?></td>
						<td> <?php echo $mahasiwa->id_matkul;?></td>
					</tr>
				<?php	} ?>
			</tbody>
		</table>
	</div>


</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            
            </div>
    </div><!-- /.row -->

</section><!-- /.content -->
