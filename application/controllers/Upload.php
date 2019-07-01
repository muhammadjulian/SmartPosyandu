<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'upload';
		$this->load->view('header', $isi);
	}
}
