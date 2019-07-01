<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format4 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format4';
		$this->load->view('sip/header', $isi);

	}
}