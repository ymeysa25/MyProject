<!-- Content Header (Page header) -->
<section class="content-header">
   	<div class= "container col-sm-11">
		<table class="table table-striped table-bordered" >
			<thead>
			<!-- Judul kolom -->
				<tr>
				<th style="color: red">ID</th>
				<th style="color: red">Nama</th>
				<th style="color: red">Nama Dosen</th>
				<th style="color: red">Nama Mata Kuliah</th>
				<th style="color: red">Nilai</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($nilai as $mahasiwa) {
				?>
					<tr>
						<td> <?php echo $mahasiwa->id;?></td>
						<td> <?php echo $mahasiwa->nama;?></td>
						<td> <?php echo $mahasiwa->nama_dosen;?> </td>
						<td> <?php echo $mahasiwa->nama_matkul;?></td>
						<td> <?php echo $mahasiwa->nilai;?></td>
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
