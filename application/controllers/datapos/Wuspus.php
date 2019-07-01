<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wuspus extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'datapos/wuspus';
		$this->load->view('sip/header', $isi);
	}
}
