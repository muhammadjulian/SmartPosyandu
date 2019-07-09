<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dinkes extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dinkes';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dinkes', $data);
        $this->load->view('templates/foot');
    }
}
