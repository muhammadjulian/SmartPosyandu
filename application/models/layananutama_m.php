<?php
Class layananutama_m extends CI_Model{
	public function getAlllayananutama(){
		return $this->db->get('layananutama')->result_array();
	}
	public function hapuslayanan($id){
		$this->db->where('id', $id);
		$this->db->delete('layananutama');

	}

	public function getLayananById(){
		return $this->db->get_where('layananutama',['id' => $id])->row_array();
	}

	public function updateLayanan()
    {
        $data = ["layananutama" => $this->input->post('layananutama', true)];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('layananutama', $data);
    }
}