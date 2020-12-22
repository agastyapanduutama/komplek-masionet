<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_konten extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_konten', 'konten');   
    }

    public function index()
    {
        show_404();        
    }


    public function aktivitas()
    {
        $data = $this->konten->dataAktvitas();

        $data = array(
            'title' => 'Galeri Aktivitas' ,
            'data' => $data,
            'konten' => 'admin/konten/kontenAktifitas' 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        
    }

    public function rumah()
    {
        $data = $this->konten->dataRumah();

        $data = array(
            'title' => 'Galeri Rumah',
            'data' => $data,
            'konten' => 'admin/konten/kontenRumah'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function tambah($tipe)
    {
        $kat = $this->db->get('tb_kategori')->result();
    
        $data = array(
            'title' => 'Tambah Konten' ,
            'tipe' => $tipe,
            'kategori' => $kat, 
            'konten' => 'admin/konten/tambah' 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        
    }

    public function aksiTambah()
    {

        
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size']  = '5000';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('foto')){
            $data = array(
                'title' => 'Tambah Konten',
                'error' => $this->upload->display_errors(),
                'konten' => 'admin/konten/tambah',
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        }
        else{
            $data = array(
                'judul'         => $this->input->post('judul'),
                'id_kategori'   => $this->input->post('id_kategori'),
                'teks'          => $this->input->post('teks'),
                'tipe'          => $this->input->post('tipe'),
                'gambar'        => $this->upload->data('file_name')
            );


            $this->konten->insert($data);
            $this->session->set_flashdata('success', 'Berhasil Menambahkan Konten');
            if ($_POST['tipe'] == 1) {
                redirect('admin/konten/aktifitas/','refresh');
            }else{                
                redirect('admin/konten/rumah','refresh');
            }
        }        
    }

    public function aksiHapus($id)
    {
        $gambar = $this->db->get_where('tb_konten', ['id' => $id])->row();
        // $this->req->print($gambar);
        unlink('assets/uploads/' . $gambar->gambar);
        $this->db->where('id', $id);
        $this->db->delete('tb_konten');
        $this->session->set_flashdata('success', 'berhasil menghapus data');
        if ($gambar->tipe == 1) {
            redirect('admin/konten/aktifitas/', 'refresh');
        } else {
            redirect('admin/konten/rumah', 'refresh');
        }
    }

    public function konten($param)
    {

        $konten = $this->db->get_where('tb_kontenMaster', ['kode' => $param])->row();
        // $this->req->print($konten);

        $data = array(
            'title' => "Edit Konten" ,
            'isi' => $konten,
            'konten' => 'admin/konten/master',
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        


    }

}

/* End of file C_konten.php */
