<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_tim extends CI_Controller
{

    public function index()
    {
        $kat = $this->db->get('tb_tim')->result();

        $data = array(
            'title' => "tim",
            'tim' => $kat,
            'konten' => 'admin/tim/index'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function tambah()
    {

        $data = array(
            'title' => "Tambah Tim" ,
            'konten' => 'admin/tim/tambah' 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        
    }

    public function aksiTambah()
    {

        // $this->req->print($_POST);

        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']  = '5000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data = array(
                'title' => 'Tambah Konten',
                'error' => $this->upload->display_errors(),
                'konten' => 'admin/tim/tambah',
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        } else {
            $data = array(
                'nama_tim'         => $this->input->post('nama_tim'),
                'no_kontak'   => $this->input->post('no_kontak'),
                'jabatan'          => $this->input->post('jabatan'),
                'foto'        => $this->upload->data('file_name')
            );
            // $this->req->print($data);

            $this->db->insert('tb_tim', $data);            
            $this->session->set_flashdata('success', 'Berhasil Menambahkan Konten');
                redirect('admin/tim', 'refresh');
        }
    }

    public function edit($id)
    {
        $kat = $this->db->get('tb_tim', ['id' => $id])->row();
        $data = array(
            'title' => "Edit tim",
            'tim' => $kat,
            'konten' => 'admin/tim/edit'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function aksiEdit($id)
    {
        $i = $this->input;
        $data = array(
            'id'    => $id,
            'nama_tim' => $i->post('nama_tim'),
            'keterangan'    => $i->post('keterangan'),
        );
        $this->db->where('id', $id);
        $this->db->update('tb_tim', $data);

        $this->session->set_flashdata('success', 'berhasil mengubah data');
        redirect('admin/tim', 'refresh');
    }

    public function aksiHapus($id)
    {
        $gambar = $this->db->get_where('tb_tim', ['id' => $id])->row();
        // $this->req->print($gambar);
        unlink('assets/uploads/'.$gambar->foto);
        $this->db->where('id', $id);
        $this->db->delete('tb_tim');
        $this->session->set_flashdata('success', 'berhasil menghapus data');
        redirect('admin/tim', 'refresh');
    }
}

/* End of file C_tim.php */
