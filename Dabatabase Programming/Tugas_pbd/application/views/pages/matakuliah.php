<!-- Content Header (Page header) -->
<section class="content-header">
   	<div class= "container col-sm-11">
		<a type="button" class="btn" style="background-color: blue; color: white;" href="<?php echo site_url('/create/create_matkul'); ?>" > Insert Data</a>
		<table class="table table-striped table-bordered" >
			<thead>
			<!-- Judul kolom -->
				<th style="color: red">ID Mata Kuliah</th>
				<th style="color: red">Mata Kuliah</th>
				<th style="color: red">Beban SKS</th>
				<th style="color: red">Semester</th>
				<th style="color: red">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($matkul as $da) {
				?>
					<tr>
						<td> <?php echo $da->id_matkul;?></td>
						<td> <?php echo $da->nama_matkul;?></td>
						<td> <?php echo $da->beban_sks;?> </td>
						<td> <?php echo $da->semester;?></td>
											<td>

							<a type="button" class="btn btn-sm btn-primary" href="#" >Edit</a>
							<a type="button" class="btn btn-sm btn-danger" href="<?php echo site_url('pages/delete_matkul/'. $da->id_matkul); ?>" >Delete</a>
						</td>
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
