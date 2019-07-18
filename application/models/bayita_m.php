<?php

class bayita_m extends CI_model {
	public function getAllbayita(){
		return $this->db->get('bayita')->result_array();
	}
}

?>