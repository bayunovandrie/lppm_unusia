<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianKaryaIlmiah extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian publikasi Karya Ilmiah - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");
		$data['karya_ilmiah'] = $this->db->query("SELECT * FROM karya_ilmiah LEFT JOIN tahun ON karya_ilmiah.tahun_id = tahun.TahunID");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_karya_ilmiah', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'karya_ilmiah_jumlah' => $jml,
			'karya_ilmiah_type'   => $tipe,
			'karya_ilmiah_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$cek  = $this->db->insert("karya_ilmiah", $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Publikasi Karya Ilmiah</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Publikasi Karya Ilmiah</div>');
		}
		
		header("Location: " . BASEURL . "admin/CapaianKaryaIlmiah");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE karya_ilmiah
			SET karya_ilmiah_jumlah	 = '$jml' , karya_ilmiah_type = '$tipe', tahun_id = '$tahun'
			WHERE karya_ilmiah_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Publikasi Karya Ilmiah</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Publikasi Karya Ilmiah</div>');
		}

		header("Location: " . BASEURL . "admin/CapaianKaryaIlmiah");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM karya_ilmiah WHERE karya_ilmiah_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Publikasi Karya Ilmiah</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Publikasi Karya Ilmiah</div>');
		}

		header("Location: " . BASEURL .  "admin/CapaianKaryaIlmiah");
		exit();
	}
}