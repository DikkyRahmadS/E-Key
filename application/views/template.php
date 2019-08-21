<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <link rel="icon" href="<?=base_url()?>assets/img/logo.png">
  <title>E-Key | Universitas Islam Negeri Malang</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />


  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">

  <script src="<?=base_url()?>assets/js/modernizr-2.7.1.js"></script>

  <style type="text/css">
  header{
    background: url(<?=base_url()?>assets/img/bg.jpg) no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
  }
  h1 {
    color: black;
    font-family: Algerian;
  }
  
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  cursor:pointer;
}

  /*------------------Buttons---------------------*/
.btn:focus {
  outline: 0px auto -webkit-focus-ring-color;
  outline: none;
}

.btn {
  text-transform: uppercase;
  border-radius: 30px;
  border: none;
  cursor:pointer;
}

.btn-lg {
  font-size: 40px;
  line-height: 1.33;
  padding: 22px 30px;
  font-weight: 400;
  letter-spacing: 1px;
}

.btn-sm {
  font-size: 11px;
  line-height: 1.33;
  padding: 10px 18px;
  font-weight: 400;
} 

.btn-wide {
  width: 100%;
  font-size: 13px;
  line-height: 1.33;
  padding: 18px 28px;
  font-weight: 400;
  letter-spacing: 1px;
}

.btn-primary {
  background-color:#70cbce;
  color: #ffffff;

}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {
  background-color: #8be2e5;
  color: #ffffff;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}

.btn-secondary {
  background-color: white;
  color: #231f20;
}

.btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
  background-color: #ededed;
  color: #231f20;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.js-example-basic-multiple{
  width: 567px;
  cursor:pointer;
  
}
.gambar{
  margin-left:auto;
  margin-right:auto;
  display:block;
  width:220px
}
.col-xs-6{
  
}
  </style>


</head>

<body>
    <header>
     <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href=""><img src="<?=base_url()?>assets/img/head.png" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
              </a>&nbsp; &nbsp;<a href="<?=base_url()?>Datatable/index">History</a>
          </div>
        </div>
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <img src="<?=base_url()?>assets/img/kunci.png" alt="" class="gambar">
            <br><br><br>
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                    <p class="btn btn-secondary btn-lg scroll" data-toggle="modal" data-target="#pinjam">Pinjam</p>
                  </div>
                  <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                    <p class="btn btn-primary btn-lg scroll" data-toggle="modal" data-target="#kembali">Kembali</p>
                  </div>
                </div><!--End Button Row-->  
              </div>
            </div>
            
          </div>
        </div>
      </div> 
    
    </header>

    <!-- Modal -->

    <div class="modal fade" id="pinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <form action="<?php echo base_url(). 'Datatable/tambah_aksi'; ?>" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pinjam">Peminjaman Kunci </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
            <div class="jurusan">
          <label> Pilih Jurusan </label> <br> 
          <select name="jurusan" id="jurusan">
          <option value="">-- Pilih Jurusan --</option>
            <?php foreach ($tbl_jurusan as $jurusan): ?>
              <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->jurusan; ?></option>
            <?php endforeach; ?>
        </select>            
             </div><br>
            <div class="ruangan">
           <label> Pilih Ruangan </label> <br>
          <select  name="ruangan[]" id="ruangan" disabled="" class="js-example-basic-multiple" multiple="multiple">
             <option value="" >-- Pilih Ruangan --</option>
          </select>
            </div><br>
          <div class="no_hp">
            <label> Nomor Handphone </label> <br>
            <input type="text" name="no_hp" id="no_hp" onkeyup="nama_otomatis()">
          </div>
          <div class="no_hp">
            <label> Nama </label> <br>
            <input type="text" name="nama" id="nama">
          </div>
        
          </div>    
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            <button type="submit" class="btn btn-primary" name="submit">Pinjam</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  
    <!-- Modal -->
    <div class="modal fade" id="kembali" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <form action="<?php echo base_url(). 'Kembali/tambah_aksi'; ?>" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kembali">Pengembalian Kunci</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <div class="jurusan2">
          <label> Pilih Jurusan </label> <br> 
          <select name="jurusan2" id="jurusan2">
          <option value="">-- Pilih Jurusan --</option>
            <?php foreach ($tbl_jurusan as $jurusan): ?>
              <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->jurusan; ?></option>
            <?php endforeach; ?>
        </select>            
             </div><br>
            <div class="ruangan2">
           <label> Pilih Ruangan </label> <br>
          <select  name="ruangan[]" id="ruangan2" disabled="" class="js-example-basic-multiple" multiple="multiple">
             <option value="" >-- Pilih Ruangan --</option>
          </select>
            </div><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
      </form>
    </div>
    <!-- Javascript
    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->

    <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
   
<script type="text/javascript">
  $(document).ready(function(){
    $('#jurusan').on('change',function(){
      var id_jurusan = $(this).val();
      if(id_jurusan == '')
      {
        $('#ruangan').prop('disabled', true);
      }
      else
      {
        $('#ruangan').prop('disabled', false);
        $.ajax({
            url:"<?php echo base_url() ?>dashboard/get_ruangan",
            type:"POST",
            data:{'id_jurusan' : id_jurusan},
            dataType:'json',
            success: function(data){
              $('#ruangan').html(data);
            },
            error: function(){
              alert('Error');
            }
        });
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#jurusan2').on('change',function(){
      var id_jurusan = $(this).val();
      if(id_jurusan == '')
      {
        $('#ruangan2').prop('disabled', true);
      }
      else
      {
        $('#ruangan2').prop('disabled', false);
        $.ajax({
            url:"<?php echo base_url() ?>kembali/get_ruangan",
            type:"POST",
            data:{'id_jurusan' : id_jurusan},
            dataType:'json',
            success: function(data){
              $('#ruangan2').html(data);
            },
            error: function(){
              alert('Tidak Ada Ruangan Yang Sedang di Pinjam');
            }
        });
      }
    });
  });
</script>
<script type="text/javascript">

$('#ruangan').select2();

$('#ruangan').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
    
});
$("#ruangan").select2({
    placeholder: "  Pilih Ruangan"
});
</script>
<script type="text/javascript">

$('#ruangan2').select2();

$('#ruangan2').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
    
});
$("#ruangan2").select2({
    placeholder: "  Pilih Ruangan"
});
</script>
<!-- script untuk nama otomatis -->
<script>
  function nama_otomatis() {
    var no_hp=$('#no_hp').val();
    $.ajax({
      type: "GET",
      url: '<?= base_url();?>index.php/Dashboard/get_data',
      data: {'no_hp':no_hp},
      dataType: "JSON",
      success: function (response) {
        //console.log(response.nama);
          $('#nama').val(response.nama);   
      }
    });
  }
</script>
    </body>
</html>