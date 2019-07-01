<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alur extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'kegiatan_ta/alur';
		$this->load->view('header', $isi);
	}
}
