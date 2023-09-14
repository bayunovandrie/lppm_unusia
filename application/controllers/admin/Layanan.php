<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function hki()
	{
		$data['title'] = 'HKI dan Paten - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['hki'] = $this->db->query("SELECT * FROM layanan_hki");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_hki_paten', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function insentif_jurnal()
	{
		$data['title'] = 'Insentif Jurnal - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['insentif'] = $this->db->query("SELECT * FROM insentif_jurnal");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_insentif_jurnal', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function penerbitan_buku()
	{
		$data['title'] = 'Penerbitan Buku - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['penerbitan'] = $this->db->query("SELECT * FROM penerbitan_buku");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_penerbitan_buku', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function pengelolaan_jurnal()
	{
		$data['title'] = 'Pengelolaan Jurnal - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['pengelolaan'] = $this->db->query("SELECT * FROM pengelolaan_jurnal");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_pengelolaan_jurnal', $data);
		$this->load->view('main/admin/footer',$data);
	} 

	public function ppm()
	{
		$data['title'] = 'Penelitian dan Pengabdian Masyarakat - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['ppm'] = $this->db->query("SELECT * FROM layanan_ppm");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_layanan_ppm', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function kkn()
	{
		$data['title'] = 'Kuliah Kerja Nyata Mahasiswa - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['kkn'] = $this->db->query("SELECT * FROM layanan_kkn");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_layanan_kkn', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function lapor()
	{
		$data['title'] = 'LAPOR - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['lapor'] = $this->db->query("SELECT * FROM layanan_lapor");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/layanan/page_layanan_lapor', $data);
		$this->load->view('main/admin/footer',$data);
	}



	public function create()
	{
		$link = $this->input->post("link");
		$jenis = $this->input->post('jenis');

		if( $jenis == 'hki' ) {

			$database = 'layanan_hki';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/hki';

		} elseif ($jenis == 'insentif') {

			$database = 'insentif_jurnal';
			$table_link = 'insentif_link';
			$location = 'admin/Layanan/insentif_jurnal';

		} elseif ($jenis == 'penerbitan') {

			$database = 'penerbitan_buku';
			$table_link = 'penerbitan_link';
			$location = 'admin/Layanan/penerbitan_buku';

		} elseif ($jenis == 'pengelolaan') {

			$database = 'pengelolaan_jurnal';
			$table_link = 'pengelolaan_link';
			$location = 'admin/Layanan/pengelolaan_jurnal';

		} elseif ($jenis == 'ppm') {

			$database = 'layanan_ppm';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/ppm';

		} elseif ($jenis == 'kkn') {

			$database = 'layanan_kkn';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/kkn';

		} elseif ($jenis == 'lapor') {

			$database = 'layanan_lapor';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/lapor';

		}


		$data = [
			$table_link => $link 
		];



		$this->db->insert($database, $data);

		$newLocation = BASEURL . $location;

		header("Location: " . $newLocation );
		exit();
	}

	public function update()
	{
		$link = $this->input->post('link');
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');

		if( $jenis == 'hki' ) {

			$database = 'layanan_hki';
			$table_id = 'layanan_id';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/hki';

		} elseif ($jenis == 'insentif') {

			$database = 'insentif_jurnal';
			$table_id = 'insentif_id';
			$table_link = 'insentif_link';
			$location = 'admin/Layanan/insentif_jurnal';

		} elseif ($jenis == 'penerbitan') {

			$database = 'penerbitan_buku';
			$table_id = 'penerbitan_id';
			$table_link = 'penerbitan_link';
			$location = 'admin/Layanan/penerbitan_buku';
			
		} elseif ($jenis == 'pengelolaan') {

			$database = 'pengelolaan_jurnal';
			$table_id = 'pengelolaan_id';
			$table_link = 'pengelolaan_link';
			$location = 'admin/Layanan/pengelolaan_jurnal';
			
		} elseif ($jenis == 'ppm') {

			$database = 'layanan_ppm';
			$table_id = 'layanan_id';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/ppm';
			
		} elseif ($jenis == 'kkn') {

			$database = 'layanan_kkn';
			$table_id = 'layanan_id';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/kkn';
			
		} elseif ($jenis == 'lapor') {

			$database = 'layanan_lapor';
			$table_id = 'layanan_id';
			$table_link = 'layanan_link';
			$location = 'admin/Layanan/lapor';
			
		}

		$this->db->query("UPDATE $database SET $table_link = '$link' WHERE $table_id = '$id' ");

		$newLocation = BASEURL . $location;
		header('Location: ' . $newLocation);
		exit();
	}

	public function delete()
	{
		$id  = $this->input->post('id');
		$jenis = $this->input->post('jenis');

		if( $jenis == 'hki' ) {

			$database = 'layanan_hki';
			$table_id = 'layanan_id';
			$location = 'admin/layanan/hki';
		} elseif ($jenis == 'insentif') {

			$database = 'insentif_jurnal';
			$table_id = 'insentif_id';
			$location = 'admin/Layanan/insentif_jurnal';

		} elseif ($jenis == 'penerbitan') {

			$database = 'penerbitan_buku';
			$table_id = 'penerbitan_id';
			$location = 'admin/layanan/penerbitan_buku';	

		} elseif ($jenis == 'pengelolaan') {

			$database = 'pengelolaan_jurnal';
			$table_id = 'pengelolaan_id';
			$location = 'admin/layanan/pengelolaan_jurnal';

		} elseif ($jenis == 'ppm') {

			$database = 'layanan_ppm';
			$table_id = 'layanan_id';
			$location = 'admin/layanan/ppm';	
		} elseif ($jenis == 'kkn') {

			$database = 'layanan_kkn';
			$table_id = 'layanan_id';
			$location = 'admin/layanan/kkn';	
		} elseif ($jenis == 'lapor') {

			$database = 'layanan_lapor';
			$table_id = 'layanan_id';
			$location = 'admin/layanan/lapor';	
		}

		$this->db->query("DELETE FROM $database WHERE $table_id = '$id' ");

		$newLocation = BASEURL . $location;
		header('Location: ' . $newLocation);
		exit();
	}
}