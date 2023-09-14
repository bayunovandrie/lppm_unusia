<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianProsiding extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian publikasi Prosiding Dan Media Massa - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");
		$data['buku'] = $this->db->query("SELECT * FROM publikasi_prosiding LEFT JOIN tahun ON publikasi_prosiding.tahun_id = tahun.TahunID ORDER BY prosiding_type ASC");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_prosiding', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'prosiding_jumlah' => $jml,
			'prosiding_type'   => $tipe,
			'prosiding_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$cek  = $this->db->insert("publikasi_prosiding", $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Publikasi Prosiding</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Publikasi Prosiding</div>');
		}
		
		header("Location: " . BASEURL . "admin/CapaianProsiding");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE publikasi_prosiding
			SET prosiding_jumlah	 = '$jml' , prosiding_type = '$tipe', tahun_id = '$tahun'
			WHERE prosiding_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Publikasi Prosiding</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Publikasi Prosiding</div>');
		}

		header("Location: " . BASEURL . "admin/CapaianProsiding");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM publikasi_prosiding WHERE prosiding_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Publikasi Prosiding</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Publikasi Prosiding</div>');
		}

		header("Location: " . BASEURL .  "admin/CapaianProsiding");
		exit();
	}
}