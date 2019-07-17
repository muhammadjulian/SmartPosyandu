<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layananutama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //model
        $this->load->model("layananutama_m");
    }

    public function index()
    {
        $data['title'] = 'Layanan Utama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('layanan_utama', $data);
        $this->load->view('templates/foot');
    }
}
