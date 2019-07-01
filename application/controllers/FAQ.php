<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'faq';
		$this->load->view('header', $isi);
	}
}
