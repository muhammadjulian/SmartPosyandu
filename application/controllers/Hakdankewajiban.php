<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakdankewajiban extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'kegiatan_ta/hakdankewajiban';
		$this->load->view('header', $isi);
	}
}
