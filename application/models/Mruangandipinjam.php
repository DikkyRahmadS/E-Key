<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mruangandipinjam extends CI_Model {

	  function show_data(){

	  	$this->db->select('*');
        $this->db->from('tbl_ruangan');
        $this->db->join('tbl_jurusan', 'tbl_jurusan.id_jurusan=tbl_ruangan.id_jurusan');
        $this->db->where('flag = 1');
        return $this->db->get();

}
}

/* End of file Mruangandipinjam.php */
/* Location: ./application/models/Mruangandipinjam.php */