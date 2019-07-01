<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'datapos/bayi';
		$this->load->view('sip/header', $isi);
	}
}
