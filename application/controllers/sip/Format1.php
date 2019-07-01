<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format1 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format1';
		$this->load->view('./sip/header', $isi);

	}
}