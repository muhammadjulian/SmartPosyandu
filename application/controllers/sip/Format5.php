<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format5 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format5';
		$this->load->view('sip/header', $isi);

	}
}