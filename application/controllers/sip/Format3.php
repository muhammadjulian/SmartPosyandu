<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format3 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format3';
		$this->load->view('sip/header', $isi);

	}
}