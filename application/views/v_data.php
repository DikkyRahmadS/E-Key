<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Peminjaman</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>Tanggal & Jam </td>
				<td>Nama Jurusan </td>
				<td>Nama Ruangan</td>
				<td>Nomor Handphone</td>
				<td>Nama</td>
	
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data as $i):?>
			<tr>
				<td><?php echo $i['tanggal_jam'];?></td>
				<td><?php echo $i['id_jurusan'];?></td>
				<td><?php if ( $i['data_ruangan']=='Ada') {
					foreach ($ruangan as  $value) {
						if ($value['id_tbl_pinjam']==$i['id_pinjam']) {
						echo $value['ruangan'],'<br>';
						}
					}
				} else {
					echo 'Tidak Ada Data';
				}
				;?></td>
				<td><?php echo $i['no_hp'];?></td>
				<td><?php echo $i['nama'];?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>