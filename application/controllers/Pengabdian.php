<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengabdian extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function internal()
	{
		$data['title'] = 'Pengabdian Internal - LPPM UNUSIA';

		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");

		$tahun = $this->input->post('tahun');

		if( isset($tahun) ) {
			$sql = " AND pengabdian_tahun = '$tahun' ";
		} else {
			$sql = " ";
		}

		$data['pengabdian'] = $this->db->query("SELECT * FROM pengabdian LEFT JOIN Tahun ON pengabdian.pengabdian_tahun = Tahun.TahunID WHERE pengabdian_tipe = '1' $sql  ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pengabdian/page_pengabdian_internal', $data);
		$this->load->view('main/footer');
	}

	public function eksternal()
	{
		$data['title'] = 'Pengabdian Eksternal - LPPM UNUSIA';
		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");

		$tahun = $this->input->post('tahun');

		if( isset($tahun) ) {
			$sql = " AND pengabdian_tahun = '$tahun' ";
		} else {
			$sql = " ";
		}

		$data['pengabdian'] = $this->db->query("SELECT * FROM pengabdian LEFT JOIN Tahun ON pengabdian.pengabdian_tahun = Tahun.TahunID WHERE pengabdian_tipe = '2' $sql ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pengabdian/page_pengabdian_eskternal',$data);
		$this->load->view('main/footer');
	}
	public function kkn()
	{
		$data['title'] = 'KKN - LPPM UNUSIA';
		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");

		$tahun = $this->input->post('tahun');

		if( isset($tahun) ) {
			$sql = " AND pengabdian_tahun = '$tahun' ";
		} else {
			$sql = " ";
		}

		$data['pengabdian'] = $this->db->query("SELECT * FROM pengabdian LEFT JOIN Tahun ON pengabdian.pengabdian_tahun = Tahun.TahunID WHERE pengabdian_tipe = '3' $sql ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pengabdian/page_kkn',$data);
		$this->load->view('main/footer');
	}

	public function mandiri()
	{
		$data['title'] = 'Mandiri - LPPM UNUSIA';
		$data['tahun'] = $this->db->query("SELECT * FROM Tahun");

		$tahun = $this->input->post('tahun');

		if( isset($tahun) ) {
			$sql = " AND pengabdian_tahun = '$tahun' ";
		} else {
			$sql = " ";
		}

		$data['pengabdian'] = $this->db->query("SELECT * FROM pengabdian LEFT JOIN Tahun ON pengabdian.pengabdian_tahun = Tahun.TahunID WHERE pengabdian_tipe = '4' $sql ");

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pengabdian/page_pengabdian_mandiri',$data);
		$this->load->view('main/footer');
	}
}