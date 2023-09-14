<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function hki()
	{
		$data['title'] = 'Layanan HKI dan Paten - LPPM UNUSIA';

		$data['link'] = $this->db->query("SELECT * FROM layanan_hki")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_hki',$data);
		$this->load->view('main/footer',$data);
	}

	public function insentif_jurnal()
	{
		$data['title'] = 'Layanan Insentif Publikasi - LPPM UNUSIA';

		$data['link'] = $this->db->query("SELECT * FROM insentif_jurnal")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_insentif_jurnal',$data);
		$this->load->view('main/footer',$data);
	}

	public function kelola_jurnal()
	{
		$data['title'] = 'Layanan Pengelolaan Jurnal - LPPM UNUSIA';
		$data['link'] = $this->db->query("SELECT * FROM pengelolaan_jurnal")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_pengelola_jurnal',$data);
		$this->load->view('main/footer',$data);
	}

	public function ppm()
	{
		$data['title'] = 'Layanan Penelitian dan Pengabdian Masyarakat - LPPM UNUSIA';
		$data['link'] = $this->db->query("SELECT * FROM layanan_ppm")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_ppm',$data);
		$this->load->view('main/footer',$data);
	}

	public function penerbitan_buku()
	{
		$data['title'] = 'Layanan Penerbitan Buku - LPPM UNUSIA';
		$data['link'] = $this->db->query("SELECT * FROM penerbitan_buku ")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_layanan_isbm',$data);
		$this->load->view('main/footer',$data);
	}

	public function layanan_kkn()
	{
		$data['title'] = 'Layanan Kuliah Kerja Nyata - LPPM UNUSIA';

		$data['link'] = $this->db->query("SELECT * FROM layanan_kkn ")->result_array()[0];


		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_layanan_kkn',$data);
		$this->load->view('main/footer',$data);
	}

	public function lapor()
	{
		$data['title'] = 'LAPOR - LPPM UNUSIA';
		$data['link'] = $this->db->query("SELECT * FROM layanan_lapor ")->result_array()[0];

		
		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/layanan/page_lapor',$data);
		$this->load->view('main/footer',$data);
	}


}