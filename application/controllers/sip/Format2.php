<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Format2 extends CI_Controller {

	public function index()
	{ 
		$isi['konten'] = 'sip/format2';
		$this->load->view('sip/header', $isi);

	}
}