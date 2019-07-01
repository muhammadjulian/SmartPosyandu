<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lansia extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'datapos/lansia';
		$this->load->view('sip/header', $isi);
	}
}
