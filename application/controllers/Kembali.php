<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kembali extends CI_Controller {
                                function __construct()
                {
                                parent:: __construct();
                                $this->load->model('mjurusankembali','', TRUE);
                                //ini digunakan untuk dapat mengakses model mjurusan
                }

                public function index()
                {
                                $data['tbl_jurusan'] = $this->mjurusankembali->get_jurusan_query();
                                $this->load->view('template',$data);
                }
               public function get_ruangan()
               {
               		$id_jurusan = $this->input->post('id_jurusan');
               		$tbl_ruangan = $this->mjurusankembali->get_ruangan_query($id_jurusan);
               		if(count($tbl_ruangan)>0)
               		{
               			$rua_select_box = '';
               			$rua_select_box = '<option value ="">-- Pilih Ruangan --</option>';
               			foreach ($tbl_ruangan as $ruangan) {
               				$rua_select_box .='<option value="'.$ruangan->id_ruangan.'">'.$ruangan->ruangan.'</option>';
               			}
               			echo json_encode($rua_select_box);
               		}
               }		
}
?>