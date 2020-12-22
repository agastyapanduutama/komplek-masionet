<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home', 'home');
		
	}
	

	public function index()
	{
		$data = array(
			'title' => 'Cipta Sari Pusaka Jaya' ,
			'konten' => 'home/v_home' 
		);

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function about()
	{
		$data = array(
			'title' => 'Apa Itu Maisonet?' ,
			'konten' => 'home/v_about' 
		);

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function galery()
	{
		$data = array(
			'title' => 'Galeri Maisonet' , 
			'konten' => 'home/v_galery'
		);

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function agent()
	{
		$data = array(
			'title' => 'Agent Kami' ,
			'konten' => 'home/v_agent' 
		);

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function galeryRumah()
	{
		$data = array(
			'title' => "Galeri Perumahan" ,
			'konten' => 'home/v_rumah' 
		);

		$this->load->view('home/templates/templates', $data, FALSE);
	}

	public function detail($id)
	{
		$kategori = $this->db->get_where('tb_kategori');
		$konten = $this->db->get_where('tb_konten', ['id' => $id])->row();
		// $total = $this->db- 


		$data = array(
			'title' 	=> "Lihat Galeri",
			'data'		=> $konten, 
			'kategori'	=> $kategori, 
			'konten' 	=> 'home/v_detail', 
		);

		$this->load->view('home/templates/templates', $data, FALSE);
		
	}

}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */