<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Download Panduan - LPPM UNUSIA';

		$data['category'] = $this->db->query("SELECT * FROM category_donwload");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/download/page_download',$data);
		$this->load->view('main/footer',$data);
	}

	public function choose_category()
	{
		$data['title'] = 'Download Panduan - LPPM UNUSIA';
		$cat_id = $this->input->get('categoryid');

		$data['category_dokumen'] = $this->db->query("SELECT * FROM category_donwload WHERE category_id = '$cat_id' ")->result_array()[0];

		$data['panduan'] = $this->db->query("SELECT * FROM download_panduan WHERE category_donwload_id = '$cat_id' ");

		$data['category'] = $this->db->query("SELECT * FROM category_donwload");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/download/page_choose_category',$data);
		$this->load->view('main/footer',$data);
	}
}