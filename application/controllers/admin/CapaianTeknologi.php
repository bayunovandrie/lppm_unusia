<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianTeknologi extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian publikasi Teknologi - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");
		$data['teknologi'] = $this->db->query("SELECT * FROM laporan_teknologi LEFT JOIN tahun ON laporan_teknologi.tahun_id = tahun.TahunID ");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_capaian_teknologi', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'teknologi_jumlah' => $jml,
			'teknologi_tipe'   => $tipe,
			'teknologi_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$cek  = $this->db->insert("laporan_teknologi", $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Publikasi</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Publikasi</div>');
		}
		
		header("Location: " . BASEURL . "admin/CapaianTeknologi");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE laporan_teknologi
			SET teknologi_jumlah	 = '$jml' , teknologi_tipe = '$tipe', tahun_id = '$tahun'
			WHERE teknologi_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Publikasi</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Publikasi</div>');
		}

		header("Location: " . BASEURL . "admin/CapaianTeknologi");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM laporan_teknologi WHERE teknologi_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Publikasi</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Publikasi</div>');
		}

		header("Location: " . BASEURL .  "admin/CapaianTeknologi");
		exit();
	}
}