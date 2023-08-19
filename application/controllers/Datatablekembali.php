<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datatablekembali extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('mdatakembali');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        // $x['data']=$this->mdatakembali->show_data()->result_array();
        //$x['data_ruangan']=$this->mdatakembali->show_data_ruangan()->result_array();
        //koreksi dari saya
        $x= $this->mdatakembali->show_data()->result_array();
        foreach ($x as $value) {
            $id_kembali = $value['id_kembali'];
            $cari_id_ruangan = $this->mdatakembali->find_data('tbl_kembali_ruang', 'id_tbl_kembali', $id_kembali);
            if ($cari_id_ruangan->num_rows() == 0) {
				$data_ruang = 'Tidak Ada Data';
				$data[] = [
					'id_kembali' => $id_kembali,
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
                    $cari_ruangan = $this->mdatakembali->find_data('tbl_ruangan', 'id_ruangan', $id_tbl_ruangan)->row_array();
                    // $data_ruang[] = [
                    //     'id' => $item_cari['id'],
                    //     'id_tbl_kembali' => $item_cari['id_tbl_kembali'],
                    //     'id_tbl_ruangan' => $id_tbl_ruangan,
					// 	'ruangan' => $cari_ruangan['ruangan'],
					// ];
					$data_ruang='Ada';
				}
				$data[] = [
					'id_kembali' => $id_kembali,
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
		$x['ruangan']=$this->mdatakembali->show_data_ruangan()->result_array();
        //print_r($x['ruangan']);
        $this->load->view('v_datakembali',$x);
    }
     public function get_data()
    {
        $no_hp = $this->input->get('no_hp');
        //$no_hp='2147483647';
        $data = $this->mdatakembali->get_no_hp($no_hp);
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
    public function tambah_aksi()
    {
        $v_date = date('Y-m-d H:i:s');
        $jurusan = $this->input->post('jurusan');
        $ruangan = $this->input->post('ruangan');
        $no_hp = $this->input->post('no_hp');
        $nama = $this->input->post('nama');
        $check_data = $this->mdatakembali->cari_data($no_hp);
        if ($check_data->num_rows() > 0) {
            $data = array(
                'tanggal_jam' => $v_date,
                'id_jurusan' => $jurusan,
                'no_hp' => $no_hp,
                'nama' => $nama,
            );
            $this->mdatakembali->input_data($data, 'tbl_kembali', $ruangan);
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
            $this->mdatakembali->input_data($data, 'tbl_kembali', $ruangan);
            $this->mdatakembali->input_user($data_user);
        }
                // cari ruangan yang akan di update
        $temukan_ruangan = $this->mdatakembali->get_ruangan()->row_array();
        $relasi_kembali_ruangan = $this->mdatakembali->find_data('tbl_kembali_ruang', 'id_tbl_kembali', $temukan_ruangan['id_kembali'])->result_array();
        foreach ($relasi_kembali_ruangan as $value) {
            $data = [
                'flag' => '0',
            ];
            //print_r();
            $this->mdatakembali->update_data($value['id_tbl_ruangan'],$data);
        }
        redirect('Datatablekembali/index');

    }
}
?>