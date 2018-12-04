<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function index() {
        $this->load->view('awal_v');
    }
	 public function dataForSupplier(){
        $this -> data['title']  = 'Data Request Barang - E-Procurement';
        $this -> data['barang'] = $this -> M_awal -> DaftarForSupplier();
        $this -> data['isi']    = 'awal';
        $this -> load -> view('awal', $this -> data);
    }
}

