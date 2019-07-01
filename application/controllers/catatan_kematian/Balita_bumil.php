<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balita_bumil extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'catatan_kematian/balita_bumil';
		$this->load->view('sip/header', $isi);
	}
}
