<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_lansia extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'pelayanan/p_lansia';
		$this->load->view('sip/header', $isi);
	}
}