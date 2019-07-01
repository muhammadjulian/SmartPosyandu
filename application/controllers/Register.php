<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('mahasiswa/register');
	}

	public function simpan()
	{
		$key = $this->input->post('email');
		$email = $this->input->post('email');
		$data['email']	= $this->input->post('email');
		$saltid   = md5($this->input->post('email'));
		$data['nama']	= $this->input->post('nama');
		$data['password']	= md5($this->input->post('password'));
		$this->load->model('Model_Register');
		$query = $this->Model_Register->getdata($key);
		$cektera=$this->Model_Resgister->cekitera($key);
		$cek1=$this->Model_Register->checkEmail($key);
		$cek2=$this->Model_Register->cekmail($key);

		if($cektera == false) {
			echo "<script>window.alert('Gunakan Email ITERA')</script>";
			echo "<meta http-equiv='refresh' content='0;url=http://localhost/tasi/register'>";
		}
		else {
			if($cek1 == false)
			{
				echo "<script>window.alert('Email anda invalid')</script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/tasi/register'>";
			}
			else
			{
				if ($cek2 == false) {
					echo "<script>window.alert('Email Sudah Terdaftar')</script>";
					echo "<meta http-equiv='refresh' content='0;url=http://localhost/tasi/register'>";
				}
				else
				{
					$this->sendemail($email, $saltid);
					$this->model_daftar->getinsert($data);
					echo "<meta http-equiv='refresh' content='0;url=http://localhost/tasi/'>";
				}
			}
		}
	}

	function sendemail($email,$saltid){
		// configure the email setting
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com'; //smtp host name
		$config['smtp_port'] = 465; //smtp port number
		$config['smtp_user'] = 'emailsimta@gmail.com';
		$config['smtp_pass'] = 'emaildummy'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        $url = base_url()."daftar/confirmation/".$saltid;
        $this->email->from('emailsimta@gmail.com', 'VERIFIKASI PENDAFTARAN');
        $this->email->to($email);
        $this->email->subject('Verifikasi Email');
        $message = "<html><head><head></head><body><p>Hi,</p><p>Terimakasih telah mendaftar.</p><p>ikuti tautan berikut untuk konfirmasi email.</p><a href=".$url."><b>VERIFIKASI</b></a><br/><p>Hormat,</p><p>Administrator SITA</p></body></html>";
        $this->email->message($message);
        return $this->email->send();
    }
}
