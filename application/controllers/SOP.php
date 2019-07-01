<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOP extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'sop';
		$this->load->view('header', $isi);
	}
}
