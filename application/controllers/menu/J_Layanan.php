<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class J_Layanan extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'menu/j_layanan';
		$this->load->view('sip/header', $isi);
	}
}
