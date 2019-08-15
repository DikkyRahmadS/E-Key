<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MjurusanKembali extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_jurusan_query(){
		$query = $this->db->get('tbl_jurusan');
        return $query->result();
	}
	public function get_ruangan_query($id_jurusan){
		$query = $this->db->get_where('tbl_ruangan', array('id_jurusan' =>$id_jurusan, 'flag' => 1));  
		return $query->result();
	}
}
?>