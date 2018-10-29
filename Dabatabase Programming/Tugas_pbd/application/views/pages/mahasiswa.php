<!-- Content Header (Page header) -->
<section class="content-header">
   	<div class= "container col-sm-11">
   		<div class="row">
		<a type="button" class="btn" style="background-color: blue; color: white;" href="<?php echo site_url('/pages/create'); ?>" > Insert Data</a>
		<a  style=" color: blue;float: right;" href="<?php echo site_url('/pages/download'); ?>" > Download</a>
		</div>
		<table class="table table-striped table-bordered" >
			<thead>
			<!-- Judul kolom -->
				<tr>
				<th style="color: red">ID</th>
				<th style="color: red">NIM</th>
				<th style="color: red">Nama</th>
				<th style="color: red">Alamat</th>
				<th style="color: red">Opsi</th>
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
						<td>

							<a type="button" class="btn btn-sm btn-primary" href="<?php echo site_url('pages/update/'. $mahasiwa->id); ?>" >Edit</a>
							<a type="button" class="btn btn-sm btn-danger" href="<?php echo site_url('pages/delete/'. $mahasiwa->id); ?>" >Delete</a>
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
