<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mjurusan', '', true);
        //ini digunakan untuk dapat mengakses model mjurusan
    }

    public function index()
    {
        $data['tbl_jurusan'] = $this->mjurusan->get_jurusan_query();
        $this->load->view('template', $data);
    }
    public function get_ruangan()
    {
        $id_jurusan = $this->input->post('id_jurusan');
        $tbl_ruangan = $this->mjurusan->get_ruangan_query($id_jurusan);
        if (count($tbl_ruangan) > 0) {
            $rua_select_box = '';
            $rua_select_box = '<option value ="">-- Pilih Ruangan --</option>';
            foreach ($tbl_ruangan as $ruangan) {
                $rua_select_box .= '<option value="' . $ruangan->id_ruangan . '">' . $ruangan->ruangan . '</option>';
            }
            echo json_encode($rua_select_box);
        }
    }
    public function get_data()
    {
        $no_hp = $this->input->get('no_hp');
        //$no_hp='2147483647';
        $data = $this->mjurusan->get_no_hp($no_hp);
        if ($data->num_rows() > 0) {
            $hasil = $data->row_array();
            $hasil = [
                'nama' => $hasil['nama'],
            ];

        } else {
            $hasil = [
                'nama' => '',
            ];
        }

        echo json_encode($hasil);
    }
}
