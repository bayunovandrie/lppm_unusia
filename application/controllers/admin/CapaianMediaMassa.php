<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianMediaMassa extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian publikasi Media Massa - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");
		$data['media_massa'] = $this->db->query("SELECT * FROM media_massa LEFT JOIN tahun ON media_massa.tahun_id = tahun.TahunID ORDER BY media_type ASC");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_media_massa', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$data = [
			'media_jumlah' => $jml,
			'media_type'   => $tipe,
			'media_datetime' => $dnow,
			'tahun_id'    => $tahun 	
		];

		$cek  = $this->db->insert("media_massa", $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Publikasi Media Massa</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Publikasi Media Massa</div>');
		}
		
		header("Location: " . BASEURL . "admin/CapaianMediaMassa");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');

		$cek = $this->db->query("UPDATE media_massa
			SET media_jumlah	 = '$jml' , media_type = '$tipe', tahun_id = '$tahun'
			WHERE media_id = '$id'");

		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit Publikasi Media Massa</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Edit Publikasi Media Massa</div>');
		}

		header("Location: " . BASEURL . "admin/CapaianMediaMassa");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM media_massa WHERE media_id = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Publikasi Media Massa</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Publikasi Media Massa</div>');
		}

		header("Location: " . BASEURL .  "admin/CapaianMediaMassa");
		exit();
	}
}