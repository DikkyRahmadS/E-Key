<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ruangan_model extends CI_Model {

    public function get_ruangan()
    {
        $data_ruangan= $this->db->get('tbl_ruangan')->result();
        return $data_ruangan; 
    }
    public function masuk_db()
    {
        
      
            $data_ruangan = array(
               
                'ruangan'=>$this->input->post('ruangan'),
                'id_jurusan'=>$this->input->post('id_jurusan'),
                'flag'=>$this->input->post('flag')
            );
                $sql_masuk= $this->db->insert('tbl_ruangan', $data_ruangan);
                return $sql_masuk;
        
        

    }

    public function detail_ruangan($id_ruangan='')
    {
        return $this->db->where('id_ruangan',$id_ruangan)->get('tbl_ruangan')->row();
    }

    public function update_ruangan()
    {
      
            $dt_up_ruangan=array(
               
                'ruangan'=>$this->input->post('ruangan'),
                'id_jurusan'=>$this->input->post('id_jurusan'),
                'flag'=>$this->input->post('flag')
            );
            return $this->db->where('id_ruangan',$this->input->post('id_ruangan'))
                            ->update('tbl_ruangan', $dt_up_ruangan);
        
        
        
    }
    public function hapus_ruangan($id_ruangan)
    {
        $delete = $this->db->where('id_ruangan', $id_ruangan)->delete('tbl_ruangan');
        return $delete;
    }
}

/* End of file Kategori_model.php */
