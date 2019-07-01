<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasawisma extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'menu/dasawisma';
		$this->load->view('sip/header', $isi);
	}
}
