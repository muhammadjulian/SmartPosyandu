<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'referensi';
		$this->load->view('header', $isi);
	}
}
