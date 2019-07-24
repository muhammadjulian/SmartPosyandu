<?php
class Posyandu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model("posyandu_m");
	}

	public function posyandu_v()
	{
		$data['title'] = 'Posyandu';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('templates/head', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/posyandu_v', $data);
		$this->load->view('templates/foot');
	}

	public function save()
	{
		//mengambil nilai yang diinputkan pada insert

		$id = $this->input->post('id');
		$posyandu = $this->input->post('posyandu');
		$kelurahan_id = $this->input->post('posyandu');
		$alamat = $this->input->post('posyandu');
		$strata_id = $this->input->post('posyandu');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$this->posyandu_m->set_id($kode_jurusan);
		$this->posyandu_m->set_posyandu($posyandu);
		$this->posyandu_m->set_kelurahan_id($kelurahan_id);
		$this->posyandu_m->set_alamat($alamat);
		$this->posyandu_m->set_strata_id($strata_id);
		$this->posyandu_m->set_lat($lat);
		$this->posyandu_m->set_lng($lng);

		$hasil = $this->posyandu_m->insert();
		if ($hasil) {
			Redirect('posyandu');
		} else {
			echo "Proses tambah gagal!";
		}
	}

	public function edit()
	{
		$kode_jurusan = $this->input->post('kode_jurusan_id');
		$nama_jurusan = $this->input->post('nama_jurusan');

		$this->jurusan_m->set_kode_jurusan($kode_jurusan);
		$this->jurusan_m->set_nama_jurusan($nama_jurusan);

		$hasil = $this->jurusan_m->update();
		if ($hasil) {
			Redirect('jurusan');
		} else {
			echo "Proses ubah gagal!";
		}
	}

	public function delete()
	{
		$kode_jurusan = $this->uri->segment(3);
		$this->jurusan_m->set_kode_jurusan($kode_jurusan);

		$hasil = $this->jurusan_m->delete();
		if ($hasil) {
			Redirect('jurusan');
		} else {
			echo "Proses hapus gagal!";
		}
	}

	public function delete_all()
	{
		$this->jurusan_m->delete_all();
		Redirect('jurusan');
	}

	public function excel()
	{
		$this->load->view('jurusan_excel_v');
	}
}
