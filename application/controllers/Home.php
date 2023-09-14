<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();

        $this->load->database(); // Memuat Library Database di konstruktor
    }

	

	public function index()
	{
		$data['title'] = 'LPPM UNUSIA - Research Managament and Adminstration';

		$data['artikel_berita'] = $this->db->query("SELECT * FROM article WHERE article_type = 1 ");

		$data['artikel_berita_jumlah'] = $this->db->query("SELECT * FROM article WHERE article_type = 1 ")->num_rows();

		$data['artikel_opini'] = $this->db->query("SELECT * FROM article WHERE article_type = 2 ");
		$data['artikel_opini_jumlah'] = $this->db->query("SELECT * FROM article WHERE article_type = 2 ")->num_rows();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/home/page_home');
		$this->load->view('main/footer');
	}
}
