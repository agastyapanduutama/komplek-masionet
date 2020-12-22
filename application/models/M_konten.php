<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_konten extends CI_Model {

    public function dataAktvitas()
    {
        $this->db->select('tb_kategori.nama_kategori, tb_konten.*');
        $this->db->from('tb_konten');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_konten.id_kategori', 'left');
        $this->db->where('tipe', 1);
        $this->db->order_by('tb_konten.id', 'desc');
        return $this->db->get()->result();
        
    }
    
    public function dataRumah()
    {

        $this->db->select('tb_kategori.nama_kategori, tb_konten.*');
        $this->db->from('tb_konten');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_konten.id_kategori', 'left');
        $this->db->where('tipe', 2);
        $this->db->order_by('tb_konten.id', 'desc');
        return $this->db->get()->result();
        
    }
    

    public function getAktivitas($id)
    {
        $this->db->from('tb_konten');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_konten.id', 'left');
        $this->db->where('tipe', 1);
        $this->db->order_by('tb_konten.id', 'desc');
        $this->db->where('id', $id);
        return $this->db->get()->result();
        
    }

    public function getRumah($id)
    {
        $this->db->from('tb_konten');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_konten.id', 'left');
        $this->db->where('tipe', 2);
        $this->db->where('id', $id);
        $this->db->order_by('tb_konten.id', 'desc');
        return $this->db->get()->result();
        
    }
    
    public function insert($data)
    {
        $this->db->insert('tb_konten', $data);
        
    }

    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tb_konten', $data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tb_konten');
        
    }

}

/* End of file M_konten.php */
