<link rel="icon" href="<?=base_url()?>assets/gambar/tvlogo.png" type="image/x-icon">
<div class="block-header">
<!-- <h1>jurusan Terbaru</h1> -->
<!-- <marquee> Maksimum  255 Huruf </marquee> -->
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Jurusan</h2>
                                
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                <br> <a href="#tambah"class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                </div>
                            </div>
                        <div class="body">
                        <div class="row">
                            <table class ="table table-hover table-striped">
                                <tr>
                                <th>NO </th><th>Data jurusan</th><th colspan="2">Aksi</th>
                                </tr>
                                
                                <?php 
                                $no=0;
                                foreach ($data_jurusan as $dt_jrs) {
                                    $no++;
                                    echo '<tr>
                                            <td>'.$no.'</td>  
                                             <td>'.$dt_jrs->jurusan.'</td>
                                            <td><a href="#update_jurusan" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_jrs->id_jurusan.')">Update</a>
                                            <a href ='.base_url('index.php/jurusan/hapus_jurusan/'.$dt_jrs->id_jurusan).' class="btn btn-success" onclick="return confirm(\'Anda yakin\')">Delete</a></td>
                                          </tr>';
                                }
                                ?>                              
                            </table>

                            <?php if ($this->session->flashdata('pesan')!=null): ?>
                            
                        
                           <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div> 
                            <?php endif ?>
                            
                            </div>
                        </div>
                     </div>
 </div>

 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah jurusan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/jurusan/simpan_jurusan')?>" method="post" enctype="multipart/form-data">
        Data jurusan 
        <input type="text" name="jurusan" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_jurusan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update jurusan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/jurusan/update_jurusan')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_jurusan" id="id_jurusan">
         Data jurusan
        <input type="text" name="jurusan" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

    function tm_detail(id_jrs){
        $.getJSON("<?=base_url()?>index.php/jurusan/get_detail_jurusan/" + id_jrs,function(data)
        {
            $("#id_jurusan").val(data['id_jurusan']);
           
        });
    }

</script>