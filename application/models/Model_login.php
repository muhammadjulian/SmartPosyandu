<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    function Auth($username, $password)
    {
        // //query native coba sql injection
        // $login = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password' "; 
        // return $this->db->query($login);

        //menggunakan active record . untuk menghindari sql injection
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("admin");    
    }

    function check_db($username)
    {
        return $this->db->get_where('admin', array('username' => $username));
    }

}

/* End of file Mod_login.php */
