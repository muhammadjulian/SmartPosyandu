<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_ta extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa_ta';
		$this->load->view('header', $isi);
	}
}
