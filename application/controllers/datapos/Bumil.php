<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bumil extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'datapos/bumil';
		$this->load->view('sip/header', $isi);
	}
}
