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
				<td>Nomor Handphone</td>
				<td>Nama</td>
	
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result() as $i):
					$tanggal_jam=$i->tanggal_jam;
					$id_jurusan=$i->jurusan;
					
					$no_hp=$i->no_hp;
					$nama=$i->nama;
			?>
			<tr>
				<td><?php echo $tanggal_jam;?></td>
				<td><?php echo $id_jurusan;?></td>
				<td><?php echo $no_hp;?></td>
				<td><?php echo $nama;?></td>
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