<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Peminjaman Kunci</title>
  	<link rel="icon" href="<?=base_url()?>assets/img/logo.png">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
    body{
    	background: linear-gradient( #F5FFFA,#F8F8FF);
    }
        .header_area {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 9999999;
  transition: background 0.4s, all 0.3s linear; }
  .header_area .navbar {
    background: #F5FFFA;
    padding: 0px;
    border: 0px;
    border-radius: 0px; }
    .header_area .navbar .nav .nav-item {
      margin-right: 45px; }
      .header_area .navbar .nav .nav-item .nav-link {
        font: 500 13px/100px "Roboto", sans-serif;
        text-transform: uppercase;
        color: #222222;
        padding: 0px;
        display: inline-block; }
        .header_area .navbar .nav .nav-item .nav-link:after {
          display: none; }
      .header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
        color: #4d8eff; }
      .header_area .navbar .nav .nav-item.submenu {
        position: relative; }
        .header_area .navbar .nav .nav-item.submenu ul {
          border: none;
          padding: 0px;
          border-radius: 0px;
          box-shadow: none;
          margin: 0px;
          background: #fff;
          box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1); }
          @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu ul {
              position: absolute;
              top: 120%;
              left: 0px;
              min-width: 200px;
              text-align: left;
              opacity: 0;
              transition: all 300ms linear 0s;
              visibility: hidden;
              display: block;
              border: none;
              padding: 0px;
              border-radius: 0px; } }
          .header_area .navbar .nav .nav-item.submenu ul:before {
            content: "";
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 10px 0 10px;
            border-color: #eeeeee transparent transparent transparent;
            position: absolute;
            right: 24px;
            top: 45px;
            z-index: 3;
            opacity: 0;
            transition: all 400ms linear 300ms linear 0s; }
          .header_area .navbar .nav .nav-item.submenu ul .nav-item {
            display: block;
            float: none;
            margin-right: 0px;
            border-bottom: 1px solid #ededed;
            margin-left: 0px;
            transition: all 0.4s linear 300ms linear 0s; }
            .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
              line-height: 45px;
              color: #222222;
              padding: 0px 30px;
              transition: all 150ms linear 300ms linear 0s;
              display: block;
              margin-right: 0px; }
            .header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
              border-bottom: none; }
            .header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
              background: #4d8eff;
              color: #fff; }
        @media (min-width: 992px) {
          .header_area .navbar .nav .nav-item.submenu:hover ul {
            visibility: visible;
            opacity: 1;
            top: 100%; } }
        .header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
          margin-top: 0px; }
      .header_area .navbar .nav .nav-item:last-child {
        margin-right: 0px; }
    .header_area .navbar .search {
      font-size: 12px;
      line-height: 60px;
      display: inline-block;
      color: #222222;
      margin-left: 80px; }
      .header_area .navbar .search i {
        font-weight: 600; }
  .header_area + section, .header_area + row, .header_area + div {
    margin-top: 125px; }
  .header_area.navbar_fixed .main_menu {
    position: fixed;
    width: 100%;
    top: -70px;
    left: 0;
    right: 0;
    background: #fff;
    -webkit-transform: translateY(70px);
    -moz-transform: translateY(70px);
    -ms-transform: translateY(70px);
    -o-transform: translateY(70px);
    transform: translateY(70px);
    transition: transform 500ms ease, background 500ms ease;
    -webkit-transition: transform 500ms ease, background 500ms ease;
    box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1); }
    .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
      line-height: 70px; }

.top_menu .container {
  border-bottom: 1px solid #eeeeee; }
.top_menu .header_social li {
  display: inline-block;
  margin-right: 15px; }
  .top_menu .header_social li a {
    font-size: 14px;
    color: #777777;
    display: inline-block;
    line-height: 40px;
    transition: all 300ms linear 0s; }
  .top_menu .header_social li:last-child {
    margin-right: 0px; }
  .top_menu .header_social li:hover a {
    color: #4d8eff; }
.top_menu .nice-select {
  float: none;
  display: inline-block;
  border: 0;
  background: transparent;
  height: 39px; }
.top_menu .dn_btn {
  line-height: 40px;
  display: inline-block;
  font-size: 12px;
  margin-right: 30px;
  font-family: "Roboto", sans-serif;
  font-weight: normal;
  color: #777777;
  transition: all 300ms linear 0s; }
  .top_menu .dn_btn:hover {
    color: #4d8eff; }
  .top_menu .dn_btn:last-child {
    margin-right: 0px; }
.top_menu .lan_pack {
  height: 30px;
  border: 1px solid #eeeeee;
  border-radius: 3px;
  line-height: 28px;
  font-size: 12px;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  padding-left: 19px;
  padding-right: 36px;
  color: #777777;
  background: #f9f9ff;
  margin-right: 5px;
  margin-top: 8px; }
  .top_menu .lan_pack .current {
    color: #777777; }
  .top_menu .lan_pack:after {
    content: "\f0d7";
    border: none !important;
    font: normal normal normal 12px/1 FontAwesome;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    height: auto;
    margin-top: -6px;
    right: 20px; }
.peminjaman{
 
  margin-left:auto;
  margin-right:auto;
  display:block;

}

    </style>
</head>
<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" ><img src="<?=base_url()?>assets/img/head.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="<?=base_url()?>Dashboard/index">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Data Tabel</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?=base_url()?>Datatable/index">Data Peminjaman</a></li>
									<li class="nav-item"><a class="nav-link" href="<?=base_url()?>Datatablekembali/index">Data Pengembalian</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url()?>Ruangandipinjam/index">Sedang digunakan</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

<div class="container">

	<img src="<?=base_url()?>assets/img/peminjaman.png" class="peminjaman">
	<br>
	
	<table class="table table-bordered table-striped mydatatable" id="mydata" style="width: 100%">
		<thead>
			<tr>
				
				<th>Tanggal & Jam </th>
				<th>Nama Jurusan </th>
				<th>Nama Ruangan</th>
				<th>Nomor Handphone</th>
				<th>Nama</th>
	
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data as $i):?>
			<tr>

				
				<td><?php echo $i['tanggal_jam'];?></td>
				<td><?php echo $i['jurusan'];?></td>
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable({
			order:[[0,'desc']]
		});
	});
</script>
</body>
</html>