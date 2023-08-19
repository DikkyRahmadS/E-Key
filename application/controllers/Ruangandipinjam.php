<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangandipinjam extends CI_Controller {

 function __construct(){

            parent::__construct();

            $this->load->model('mruangandipinjam');

      }

     

      public function index(){

            $x['data']=$this->mruangandipinjam->show_data();

            $this->load->view('v_ruangandipinjam',$x);

      }

}

/* End of file Ruangandipinjam.php */
/* Location: ./application/controllers/Ruangandipinjam.php */