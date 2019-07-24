<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if ($user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']

                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin', 'refresh');
                    } elseif ($user['role_id'] == 3) {
                        redirect('dinkes');
                    } elseif ($user['role_id'] == 4) {
                        redirect('dmppa');
                    } elseif ($user['role_id'] == 5) {
                        redirect('kader', 'refresh');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    password salah!
                  </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            username yang ada masukan belum teraktivasi
          </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            username yang ada masukan belum terdaftar!
          </div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Logout anda berhasil!
          </div>');

        redirect('auth');
    }
}
