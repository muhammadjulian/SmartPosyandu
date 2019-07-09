<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Model_login'));
    }

    public function index()
    {
        if (isset($_POST['proses'])) {

            //form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
            $this->form_validation->set_error_delimiters('<span class="peringatan">', '</span>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                // jika username bukan huruf dan angka berikan pesan peringatan
                // if(!ctype_alnum($username) OR !ctype_alnum($password)){
                //     $data['pesan'] = "<div class='alert alert-danger'>
                //                                             <a href='#' class='close' data-dismiss='alert'>&times;</a>
                //                                             <strong>Maaf!</strong> Sistem tidak bisa di injeksi. </div>";

                //     $this->load->view('formlogin/login_data', $data);
                // }
                // else{
                //cek username database
                $username = $this->input->post('username');

                if ($this->Model_login->check_db($username)->num_rows() == 1) {

                    //cek verfied bycrpt menyamakan data yg di input dengan ada yg di database 
                    $db = $this->Model_login->check_db($username)->row();

                    if (hash_verified($this->input->post('password'), $db->password)) {

                        //cek username dan password dengan ada yg di database
                        //$data = $this->Mod_login->Auth($username, $password)->result();
                        // print_r($data); die();
                        // if($data) {
                        $userdata = array(
                            'password' => $db->password,
                            'username' => $db->username,
                            'user_id' => $db->user_id,


                        );

                        // print_r($userdata); die();    

                        $this->session->set_userdata($userdata);

                        redirect('dashboard');
                    } else {
                        $data['pesan'] = "<div class='alert alert-danger'>
                                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                <strong>Maaf</strong> Username dan Password anda salah. </div>";
                        $this->load->view('login', $data);
                    }
                } else {
                    $data['pesan'] = "<div class='alert alert-danger'>
                                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                <strong>Sorry</strong> User Not Found. </div>";
                    $this->load->view('login', $data);
                }

                // } //end cek sql injeqtion
            }
        } else {
            $this->load->view('login');
        }
    }
