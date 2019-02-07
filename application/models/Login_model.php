<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_login($where)
    {
        //untuk mengambil data  (select)
        $query = $this->db->get_where('admin', $where)->num_rows();

        return $query;
    }

}

/* End of file Login_model.php */


?>