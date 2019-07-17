<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kominfo extends CI_Controller
{

    public function biodata()
    {
        $this->load->model('Model_kominfo');
        $data['biodata'] = $this->Model_kominfo->getAll_biodata();
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kominfo/biodata', $data);
        $this->load->view('templates/foot');
    }
    public function kelurahan()
    {
        $this->load->model('Model_kominfo');
        $data['kelurahan'] = $this->Model_kominfo->getAll_kelurahan();
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kominfo/kelurahan', $data);
        $this->load->view('templates/foot');
    }
    public function posyandu()
    {
        $this->load->model('Model_kominfo');
        $data['posyandu'] = $this->Model_kominfo->getAll_posyandu();
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kominfo/posyandu', $data);
        $this->load->view('templates/foot');
    }
    public function del_pos($id)
    {
        $this->load->model('Model_kominfo');
        $this->Model_kominfo->delete_pos($id);
        redirect('kominfo/posyandu');
    }

    public function strata()
    {

        $this->load->model('Model_kominfo');
        $data['strata'] = $this->Model_kominfo->getAll_strata();
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kominfo/strata', $data);
        $this->load->view('templates/foot');
    }
}
