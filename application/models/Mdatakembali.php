<?php
class Mdatakembali extends CI_Model
{

    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kembali');
        $this->db->join('tbl_jurusan', 'tbl_jurusan.id_jurusan=tbl_kembali.id_jurusan');
        $this->db->order_by('id_kembali', 'desc');
        return $this->db->get();
    }

    public function show_data_ruangan()
    {
		$this->db->from('tbl_kembali_ruang');
		$this->db->join('tbl_ruangan', 'tbl_ruangan.id_ruangan = tbl_kembali_ruang.id_tbl_ruangan');
		
        return $this->db->get();
    }
    public function input_data($data, $table, $ruangan = [])
    {
        $this->db->trans_begin();

        $this->db->insert($table, $data);

        $data_ruangan = [];

        // foreach ($ruangan as $rng ) {

        // }

        for ($i = 0; $i < count($ruangan); $i++) {
            $data_ruangan[] = [
                "id_tbl_kembali" => $this->db->insert_id(),
                "id_tbl_ruangan" => $ruangan[$i],
            ];
        }

        $this->db->insert_batch('tbl_kembali_ruang', $data_ruangan);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

	}
    // untuk cari data ke database
    public function cari_data($no_hp)
    {
        $this->db->where('no_hp', $no_hp);
        return $this->db->get('tbl_user');
    }
// untuk input user jika data user tidak ada 
	public function input_user($data)
	{
		$this->db->insert('tbl_user', $data);
	}
	// perintah mencari data 
    public function find_data($tabel,$id_tabel,$id)
    {
        $this->db->where($id_tabel,$id);
        return $this->db->get($tabel);
    }
        public function get_ruangan()
    {
        $this->db->order_by('id_kembali', 'desc');
        return $this->db->get('tbl_kembali', 1);   
    }
        public function update_data($id_ruangan,$data)
    {
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->update('tbl_ruangan', $data);
    }
        public function get_no_hp($no_hp)
    {
        $this->db->where('no_hp', $no_hp);
        return $this->db->get('tbl_user');
        
    }

}
/* End of file Mdata.php */
/* Location: ./application/models/Mdata.php */
