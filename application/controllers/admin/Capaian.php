<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capaian extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");
		$data['jurnal'] = $this->db->query("SELECT * FROM publikasi_jurnal LEFT JOIN tahun ON publikasi_jurnal.tahun_id = tahun.TahunID ORDER BY publikasi_type ASC");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_publikasi_jurnal', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'publikasi_jumlah' => $jml,
			'publikasi_type'   => $tipe,
			'publikasi_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$this->db->insert("publikasi_jurnal", $data);
		
		header("Location: " . BASEURL . "admin/Capaian");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE publikasi_jurnal
			SET publikasi_jumlah = '$jml' , publikasi_type = '$tipe', tahun_id = '$tahun'
			WHERE publikasi_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Capaian</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Capaian</div>');
		}

		header("Location: " . BASEURL . "admin/Capaian");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM publikasi_jurnal WHERE publikasi_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Capaian</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Capaian</div>');
		}

		header("Location: " . BASEURL .  "admin/Capaian");
		exit();
	}
}