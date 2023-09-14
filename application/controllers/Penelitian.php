<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function internal()
	{
		$data['title'] = 'Penelitian Internal - LPPM UNUSIA';

		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");
		$data['penelitian'] = $this->db->query("SELECT * FROM penelitian LEFT JOIN tahun ON penelitian.penelitian_year = tahun.TahunID WHERE peneletian_type = '1' ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/penelitian/page_penelitian', $data);
		$this->load->view('main/footer');
	}

	public function eksternal()
	{
		$data['title'] = 'Penelitian Eksternal - LPPM UNUSIA';
		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");
		$data['penelitian'] = $this->db->query("SELECT * FROM penelitian LEFT JOIN tahun ON penelitian.penelitian_year = tahun.TahunID WHERE peneletian_type = '2' ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/penelitian/page_penelitian_eksternal',$data);
		$this->load->view('main/footer');
	}

	public function mandiri()
	{
		$data['title'] = 'Penelitian Mandiri - LPPM UNUSIA';
		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");
		$data['penelitian'] = $this->db->query("SELECT * FROM penelitian LEFT JOIN tahun ON penelitian.penelitian_year = tahun.TahunID WHERE peneletian_type = '3' ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/penelitian/page_penelitian_mandiri',$data);
		$this->load->view('main/footer');
	}
}