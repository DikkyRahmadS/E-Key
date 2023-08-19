<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login')!=true){
            
            redirect(base_url('index.php/login'),'refresh');
            
        } 
            
 }

    public function index()
    {
        $data['konten']="v_jurusan";
        $this->load->model('jurusan_model');
        $data['data_jurusan']=$this->jurusan_model->get_jurusan();
        $this->load->view('template_admin', $data, FALSE);
    }

    public function simpan_jurusan()
    {
        
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required',
        array('required' => 'SEMUA HARUS DIISI !!'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('jurusan_model','brt');
            $masuk=$this->brt->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','Sukses masuk');
            }
            else{
                // $this->session->set_flashdata('pesan', 'gagal masuk');            
            }
            
            redirect(base_url('index.php/jurusan'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/jurusan'),'refresh');
            
        }
    }

    public function get_detail_jurusan($id_jurusan='')
    {
        $this->load->model('jurusan_model');
        $data_detail=$this->jurusan_model->detail_jurusan($id_jurusan);
        echo json_encode($data_detail); 
    }
    public function update_jurusan()
    {
        
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        

        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            
            redirect(base_url('index.php/jurusan'),'refresh');   
        } else {
            $this->load->model('jurusan_model');
            $proses_update=$this->jurusan_model->update_jurusan();
            if($proses_update){
                $this->session->set_flashdata('pesan', 'sukses update');        
            } else {
                $this->session->set_flashdata('pesan', 'gagal update');
            }      
            redirect(base_url('index.php/jurusan'),'refresh');
            
        }
        
    }

    public function hapus_jurusan($id_jurusan)
    {
        $this->load->model('jurusan_model');
        $proses_delete = $this->jurusan_model->hapus_jurusan($id_jurusan);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', 'Sukses Hapus Data');
            
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Hapus Data');
            
        }

        redirect(base_url('index.php/jurusan'),'refresh');
        
    }
}

/* End of file Controllername.php */
