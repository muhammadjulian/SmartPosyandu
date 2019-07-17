<?php

class Model_kominfo extends CI_Model
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
    public function getAll_kelurahan()
    {

        $this->db->select('kelurahan.id,kecamatan.kecamatan,kelurahan.kelurahan');
        $this->db->from('kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id=kelurahan.kecamatan_id');
        return $this->db->get()->result_array();
    }
    public function getAll_posyandu()
    {

        $this->db->select('posyandu.id,kecamatan.kecamatan,kelurahan.kelurahan,posyandu.posyandu,posyandu.alamat,strataposyandu.strata,posyandu.lat,posyandu.lng');
        $this->db->from('posyandu');
        $this->db->join('kecamatan', 'kecamatan.id=posyandu.kecamatan_id');
        $this->db->join('kelurahan', 'kelurahan.id=posyandu.kelurahan_id');
        $this->db->join('strataposyandu', 'strataposyandu.id=posyandu.strata_id');
        return $this->db->get()->result_array();
    }
    public function delete_pos($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posyandu');
    }
    public function getAll_strata()
    {
        return $this->db->get('strataposyandu')->result_array();
    }
    public function delete()
    {
        $sql = "DELETE FROM posyandu 
        WHERE id='" . $this->get_id() . "'";

        return $this->db->query($sql);
    }
}
