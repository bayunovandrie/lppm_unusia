<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianHKI extends CI_Controller {
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
		$data['hki'] = $this->db->query("SELECT * FROM laporan_hki LEFT JOIN tahun ON laporan_hki.tahun_id = tahun.TahunID ORDER BY hki_tipe ASC");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_capaian_hki', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'hki_jumlah' => $jml,
			'hki_tipe'   => $tipe,
			'hki_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$cek  = $this->db->insert("laporan_hki", $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Publikasi HKI</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Publikasi HKI</div>');
		}
		
		header("Location: " . BASEURL . "admin/CapaianHKI");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE laporan_hki
			SET hki_jumlah	 = '$jml' , hki_tipe = '$tipe', tahun_id = '$tahun'
			WHERE hki_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Publikasi Karya Ilmiah</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Publikasi Karya Ilmiah</div>');
		}

		header("Location: " . BASEURL . "admin/CapaianHKI");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM laporan_hki WHERE hki_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Publikasi HKI</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Publikasi HKI</div>');
		}

		header("Location: " . BASEURL .  "admin/CapaianHKI");
		exit();
	}
}