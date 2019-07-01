<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileDosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'profiledosen';
		$this->load->view('header', $isi);
	}
}
