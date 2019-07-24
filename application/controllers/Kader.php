<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("layananutama_m");
        $this->load->model("bayita_m");
        $this->load->model("wuspus_m");
    }

    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/Kader', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA IMUNISASI
    // =====================================================================
    public function imunisasi()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/imunisasi', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA LAYANAN UTAMA
    // =====================================================================
    public function layanan_utama()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['layanan_utama'] = $this->layananutama_m->getAlllayananutama();
        $this->form_validation->set_rules('layananutama', 'Layanan Utama', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kader/layanan_utama', $data);
            $this->load->view('templates/foot');
        } else {
            $this->db->insert('layananutama', ['layananutama' => $this->input->post('layananutama')]);
            $this->session->set_flashdata('message', 'Ditambahkan');

            redirect('kader/layanan_utama');
        }
    }

    public function deletelayanan($id)
    {
        $this->layananutama_m->hapuslayanan($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('kader/layanan_utama');
    }

    public function editlayanan($id)
    {
        $data['layanan_utama'] = $this->layananutama_m->getLayananById($id);
        $this->layananutama_m->updateLayanan();
        $this->session->set_flashdata('message', 'Diubah');
        redirect('kader/layanan_utama');
    }
    // ======================================================================
    //                 BIODATA PENDUDUK
    // =====================================================================
    public function biodata()
    {
        $this->load->model('Model_kominfo');
        $data['biodata'] = $this->Model_kominfo->getAll_biodata();
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/biodata', $data);
        $this->load->view('templates/foot');
    }
    // ======================================================================
    //                 DATA SUMBERDANA
    // =====================================================================
    public function sumberdana()
    {
        $this->load->model('Model_kominfo');
        $data['biodata'] = $this->Model_kominfo->getAll_biodata();
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/sumberdana', $data);
        $this->load->view('templates/foot');
    }
    // ======================================================================
    //                 DATA DASAWISMA
    // =====================================================================
    public function dasawisma()
    {
        $this->load->model('Model_kominfo');
        $data['biodata'] = $this->Model_kominfo->getAll_biodata();
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dasawisma', $data);
        $this->load->view('templates/foot');
    }
    // ======================================================================
    //                 DATA JENIS LAYANAN
    // =====================================================================
    public function jenislayanan()
    {
        $this->load->model('Model_kominfo');
        $data['biodata'] = $this->Model_kominfo->getAll_biodata();
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/jenislayanan', $data);
        $this->load->view('templates/foot');
    }
    // ======================================================================
    //                  DATA DATA BAYI DAN BALITA
    // =====================================================================

    public function databayita()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['bayita'] = $this->bayita_m->getAllbayita();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/databayita', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA DATA IBU HAMIL
    // =====================================================================

    public function dataibuhamil()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dataibuhamil', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA WUS PUS
    // =====================================================================
    public function datawuspus()
    {
        $data['title'] = 'Data WUS PUS';
        $data['wuspus'] = $this->wuspus_m->getAllwuspus();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/datawuspus', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA IBU MENYUSUI
    // =====================================================================
    public function dataibumenyusui()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/dataibumenyusui', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  PENIMBANGAN/HAMIL/NIFAS/MENYUSUI
    // =====================================================================
    public function penimbangan()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/penimbangan', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 1
    // =====================================================================

    public function SIP_format1()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format1', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 2
    // =====================================================================
    public function SIP_format2()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format2', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 3
    // =====================================================================
    public function SIP_format3()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format3', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 4
    // =====================================================================
    public function SIP_format4()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format4', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 5
    // =====================================================================
    public function SIP_format5()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format5', $data);
        $this->load->view('templates/foot');
    }

    // ======================================================================
    //                  DATA SIP FORMAT 6
    // =====================================================================
    public function SIP_format6()
    {
        $data['title'] = 'Data Sasaran Posyandu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kader/SIP_format6', $data);
        $this->load->view('templates/foot');
    }
}
