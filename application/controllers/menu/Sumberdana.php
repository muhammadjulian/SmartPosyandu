<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'menu/sumberdana';
		$this->load->view('sip/header', $isi);
	}
}
