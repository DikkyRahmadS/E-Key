<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datatable extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mdata');
	}
	
	public function index(){
		$x['data']=$this->mdata->show_data();
		$x['data_ruangan']=$this->mdata->show_data_ruangan();
		$this->load->view('v_data',$x);
	}
	public function tambah_aksi(){
		$v_date = date('Y-m-d H:i:s');
		$jurusan = $this->input->post('jurusan');
		$ruangan = $this->input->post('ruangan');
		$no_hp = $this->input->post('no_hp');
		$nama = $this->input->post('nama');
		$check_data=$this->mdata->cari_data($no_hp); 
		if ($check_data->num_rows()>0) {
			$data = array(
				'tanggal_jam' => $v_date,
				'id_jurusan' => $jurusan,
				'no_hp' => $no_hp,
				'nama' => $nama
			);	
		$this->mdata->input_data($data,'tbl_pinjam',$ruangan);
		} else {
			$data = array(
				'tanggal_jam' => $v_date,
				'id_jurusan' => $jurusan,
				'no_hp' => $no_hp,
				'nama' => $nama
			);
			$data_user=[
				'nama'=>$nama,
				'no_hp'=>$no_hp
			];
		$this->mdata->input_data($data,'tbl_pinjam',$ruangan);
		$this->mdata->input_user($data_user);
		}
		redirect('Datatable/index');
		
	}
}
