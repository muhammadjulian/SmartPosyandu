<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format6 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format6';
		$this->load->view('sip/header', $isi);

	}
}