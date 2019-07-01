<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_bayi extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'pelayanan/p_bayi';
		$this->load->view('sip/header', $isi);
	}
}