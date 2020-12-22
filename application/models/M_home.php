<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function total()
    {
        $this->db->from('tb_konten');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_konten.id_kategori', 'left');
        
        
    }

}

/* End of file M_home.php */
