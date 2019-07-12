<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kader extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/Kader', $data);
        $this->load->view('templates/foot');
    }
    public function imunisasi(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/imunisasi', $data);
        $this->load->view('templates/foot');
    }

    public function databayita(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/databayita', $data);
        $this->load->view('templates/foot');
    }

    public function dataibuhamil(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dataibuhamil', $data);
        $this->load->view('templates/foot');
    }
    public function dataibunifas(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dataibunifas', $data);
        $this->load->view('templates/foot');
    }
    public function dataibumenyusui(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dataibumenyusui', $data);
        $this->load->view('templates/foot');
    }

    public function SIP_format1(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format1', $data);
        $this->load->view('templates/foot');
    }

    public function SIP_format2(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format2', $data);
        $this->load->view('templates/foot');
    }
    public function SIP_format3(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format3', $data);
        $this->load->view('templates/foot');
    }
    public function SIP_format4(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format4', $data);
        $this->load->view('templates/foot');
    }
    public function SIP_format5(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format5', $data);
        $this->load->view('templates/foot');
    }
    public function SIP_format6(){
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format6', $data);
        $this->load->view('templates/foot');
    }


}
