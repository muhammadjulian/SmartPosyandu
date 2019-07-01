<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_bumil extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'pelayanan/p_bumil';
		$this->load->view('sip/header', $isi);
	}
}