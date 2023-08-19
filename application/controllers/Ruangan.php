                    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login')!=true){
            
            redirect(base_url('index.php/login'),'refresh');
            
        } 
            
 }

    public function index()
    {
        $data['konten']="v_ruangan";
        $this->load->model('ruangan_model');
        $data['data_ruangan']=$this->ruangan_model->get_ruangan();
        $this->load->view('template_admin', $data, FALSE);
    }

    public function simpan_ruangan()
    {
        
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'trim|required');
        $this->form_validation->set_rules('id_jurusan', 'Id Jurusan', 'trim|required');
         $this->form_validation->set_rules('flag', 'Flag', 'trim|required',
        array('required' => 'SEMUA HARUS DIISI !!'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('ruangan_model','txt');
            $masuk=$this->txt->masuk_db();
            if($masuk==true){
                $this->session->set_flashdata('pesan','Sukses masuk');
            }
            else{
                // $this->session->set_flashdata('pesan', 'gagal masuk');            
            }
            
            redirect(base_url('index.php/ruangan'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/ruangan'),'refresh');
            
        }
    }

    public function get_detail_ruangan($id_ruangan='')
    {
        $this->load->model('ruangan_model');
        $data_detail=$this->ruangan_model->detail_ruangan($id_ruangan);
        echo json_encode($data_detail); 
    }
    public function update_ruangan()
    {
        
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'trim|required');
        $this->form_validation->set_rules('id_jurusan', 'Id Jurusan', 'trim|required');
        $this->form_validation->set_rules('flag', 'Flag', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            
            redirect(base_url('index.php/ruangan'),'refresh');   
        } else {
            $this->load->model('ruangan_model');
            $proses_update=$this->ruangan_model->update_ruangan();
            if($proses_update){
                $this->session->set_flashdata('pesan', 'sukses update');        
            } else {
                $this->session->set_flashdata('pesan', 'gagal update');
            }      
            redirect(base_url('index.php/ruangan'),'refresh');
            
        }
        
    }

    public function hapus_ruangan($id_ruangan)
    {
        $this->load->model('ruangan_model');
        $proses_delete = $this->ruangan_model->hapus_ruangan($id_ruangan);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', 'Sukses Hapus Data');
            
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Hapus Data');
            
        }

        redirect(base_url('index.php/ruangan'),'refresh');
        
    }
}

/* End of file Controllername.php */
