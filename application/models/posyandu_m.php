<?php
	class posyandu_m extends CI_Model{
		public function getAllposyandu(){

			return $this->db->get('posyandu')->result_array(); 
		}
	}
?>