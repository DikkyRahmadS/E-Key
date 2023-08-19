<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jurusan_model extends CI_Model {

    public function get_jurusan()
    {
        $data_jurusan= $this->db->get('tbl_jurusan')->result();
        return $data_jurusan; 
    }
    public function masuk_db()
    {
        
      
            $data_jurusan = array(
               
                'jurusan'=>$this->input->post('jurusan')
            );
                $sql_masuk= $this->db->insert('tbl_jurusan', $data_jurusan);
                return $sql_masuk;
        
        

    }

    public function detail_jurusan($id_jurusan='')
    {
        return $this->db->where('id_jurusan',$id_jurusan)->get('tbl_jurusan')->row();
    }

    public function update_jurusan()
    {
      
            $dt_up_jurusan=array(
               
                'jurusan'=>$this->input->post('jurusan')
                
            );
            return $this->db->where('id_jurusan',$this->input->post('id_jurusan'))
                            ->update('tbl_jurusan', $dt_up_jurusan);
        
        
        
    }
    public function hapus_jurusan($id_jurusan)
    {
        $delete = $this->db->where('id_jurusan', $id_jurusan)->delete('tbl_jurusan');
        return $delete;
    }
}

/* End of file Kategori_model.php */
