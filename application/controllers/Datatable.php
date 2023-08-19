<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datatable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('mdata');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        //$x['data']=$this->mdata->show_data()->result_array();
        //$x['data_ruangan']=$this->mdata->show_data_ruangan()->result_array();
        //koreksi dari saya
        $x = $this->mdata->show_data()->result_array();
        foreach ($x as $value) {
            $id_pinjam = $value['id_pinjam'];
            $cari_id_ruangan = $this->mdata->find_data('tbl_pinjam_ruang', 'id_tbl_pinjam', $id_pinjam);
            if ($cari_id_ruangan->num_rows() == 0) {
				$data_ruang = 'Tidak Ada Data';
				$data[] = [
					'id_pinjam' => $id_pinjam,
					'tanggal_jam' => $value['tanggal_jam'],
					'id_jurusan' => $value['id_jurusan'],
					'no_hp' => $value['no_hp'],
					'nama' => $value['nama'],
					'jurusan' => $value['jurusan'],
					'data_ruangan' => $data_ruang,
				];
            } else {
                foreach ($cari_id_ruangan->result_array() as $item_cari) {
					$id_tbl_ruangan = $item_cari['id_tbl_ruangan'];
                    $cari_ruangan = $this->mdata->find_data('tbl_ruangan', 'id_ruangan', $id_tbl_ruangan)->row_array();
                    // $data_ruang[] = [
                    //     'id' => $item_cari['id'],
                    //     'id_tbl_pinjam' => $item_cari['id_tbl_pinjam'],
                    //     'id_tbl_ruangan' => $id_tbl_ruangan,
					// 	'ruangan' => $cari_ruangan['ruangan'],
					// ];
					$data_ruang='Ada';
				}
				$data[] = [
					'id_pinjam' => $id_pinjam,
					'tanggal_jam' => $value['tanggal_jam'],
					'id_jurusan' => $value['id_jurusan'],
					'no_hp' => $value['no_hp'],
					'nama' => $value['nama'],
					'jurusan' => $value['jurusan'],
					'data_ruangan' => $data_ruang,
				];
            }

            
		}
		$x['data']=$data;
		$x['ruangan']=$this->mdata->show_data_ruangan()->result_array();
        //print_r($x['ruangan']);
        $this->load->view('v_data',$x);
    }
    public function tambah_aksi()
    {
        $v_date = date('Y-m-d H:i:s');
        $jurusan = $this->input->post('jurusan');
        $ruangan = $this->input->post('ruangan');
        $no_hp = $this->input->post('no_hp');
        $nama = $this->input->post('nama');
        $check_data = $this->mdata->cari_data($no_hp);
        if ($check_data->num_rows() > 0) {
            $data = array(
                'tanggal_jam' => $v_date,
                'id_jurusan' => $jurusan,
                'no_hp' => $no_hp,
                'nama' => $nama,
            );
            $this->mdata->input_data($data, 'tbl_pinjam', $ruangan);
        } else {
            $data = array(
                'tanggal_jam' => $v_date,
                'id_jurusan' => $jurusan,
                'no_hp' => $no_hp,
                'nama' => $nama,
            );
            $data_user = [
                'nama' => $nama,
                'no_hp' => $no_hp,
            ];
            $this->mdata->input_data($data, 'tbl_pinjam', $ruangan);
            $this->mdata->input_user($data_user);
        }
                // cari ruangan yang akan di update
        $temukan_ruangan = $this->mdata->get_ruangan()->row_array();
        $relasi_pinjam_ruangan = $this->mdata->find_data('tbl_pinjam_ruang', 'id_tbl_pinjam', $temukan_ruangan['id_pinjam'])->result_array();
        foreach ($relasi_pinjam_ruangan as $value) {
            $data = [
                'flag' => '1',
            ];
            //print_r();
            $this->mdata->update_data($value['id_tbl_ruangan'],$data);
        }
        redirect('Datatable/index');

    }
}
?>