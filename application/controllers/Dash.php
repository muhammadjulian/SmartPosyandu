<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'Dash';
		$this->load->view('sip/header', $isi);
	}
}
