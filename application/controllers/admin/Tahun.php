<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "kusam") {
            header("Location: " . BASEURL . "Auth");
            exit();
        }
    
        $this->load->library('form_validation');
        $this->load->database();
    }

	public function index()
	{
		$data['title'] = 'Tahun - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC");

		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/tahun/page_tahun', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$tahun = $this->input->post("tahun");

		$data = [
			'tahun' => $tahun
		];

		$cek = $this->db->insert('tahun', $data);
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Tahun</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Tahun</div>');
		}

		header("Location: " . BASEURL . "admin/Tahun");
		exit();

	}

	public function update()
	{
		$id = $this->input->post('id');
		$tahun = $this->input->post('tahun');

		$update = $this->db->query("UPDATE tahun SET tahun = '$tahun' WHERE TahunID = '$id' ");

		if( $update == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Update Tahun</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Update Tahun</div>');
		}
		
		header("Location: " . BASEURL . "admin/Tahun");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM tahun WHERE TahunID = '$id' ");
		if( $cek == 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Tahun</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Tahun</div>');
		}

		header("Location: " . BASEURL . "admin/Tahun");
		exit();
	}
}