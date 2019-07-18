<?php
class wuspus_m extends CI_model{
	public function getAllwuspus(){
		return $this->db->get('wuspus')->result_array();
	}
}