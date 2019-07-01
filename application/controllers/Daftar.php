<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'daftar';
		$this->load->view('header', $isi);
	}
}
