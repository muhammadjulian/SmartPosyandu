<?php

class Model_kader extends CI_Model
{
    private $id;

    public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_id()
    {
        return $this->id;
    }

    public function getAll_biodata()
    {
        $this->db->select('biodata.nik,biodata.nama,biodata.jk,biodata.tempat_lahir,biodata.tanggal_lahir,posyandu.posyandu');
        $this->db->from('biodata');
        $this->db->join('posyandu', 'posyandu.id=biodata.posyandu_id');
        return $this->db->get()->result_array();
    }
}
