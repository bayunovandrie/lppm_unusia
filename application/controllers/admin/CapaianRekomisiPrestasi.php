<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CapaianRekomisiPrestasi extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Capaian publikasi Rekomisi Prestasi - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC ");

		$data['visiting'] = $this->db->query("SELECT * FROM visiting_lecturer LEFT JOIN tahun ON visiting_lecturer.tahun_id = tahun.TahunID ORDER BY visit_type ASC");

		$data['invited'] = $this->db->query("SELECT * FROM invited_speaker LEFT JOIN tahun ON invited_speaker.tahun_id = tahun.TahunID ORDER BY invit_type ASC");

		$data['editor'] = $this->db->query("SELECT * FROM editor_jurnal LEFT JOIN tahun ON editor_jurnal.tahun_id = tahun.TahunID ORDER BY jurnal_tipe ASC");

		$data['penghargaan'] = $this->db->query("SELECT * FROM penghargaan LEFT JOIN tahun ON penghargaan.tahun_id = tahun.TahunID ORDER BY penghargaan_tipe ASC");

		$data['staff_ahli'] = $this->db->query("SELECT * FROM staf_ahli LEFT JOIN tahun ON staf_ahli.tahun_id = tahun.TahunID ORDER BY staf_tipe ASC");



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/capaian/page_rekomisi_prestasi', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$jenis = $this->input->post('jenis');
		$dnow = date('Y-m-d H:i:s');

		if( $jenis == 'visiting' ) {

			$database = 'visiting_lecturer';
			$table_jml = 'visit_jumlah';
			$table_tipe = 'visit_type';
			$table_datetime = 'visit_datetime';
			$table_tahun = 'tahun_id';

			
		} elseif( $jenis == 'invited' ) {

			$database = 'invited_speaker';
			$table_jml = 'invit_jumlah';
			$table_tipe = 'invit_type';
			$table_datetime = 'invit_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'editor' ) {

			$database = 'editor_jurnal';
			$table_jml = 'jurnal_jumlah';
			$table_tipe = 'jurnal_tipe';
			$table_datetime = 'jurnal_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'penghargaan' ) {

			$database = 'penghargaan';
			$table_jml = 'penghargaan_jumlah';
			$table_tipe = 'penghargaan_tipe';
			$table_datetime = 'penghargaan_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'staff_ahli' ) {

			$database = 'staf_ahli';
			$table_jml = 'staf_jumlah';
			$table_tipe = 'staf_tipe';
			$table_datetime = 'staf_datetime';
			$table_tahun = 'tahun_id';
		}

		$data = [
			$table_jml => $jml,
			$table_tipe   => $tipe,
			$table_datetime => $dnow,
			$table_tahun    => $tahun 	
		];

		$cek  = $this->db->insert($database, $data);

		if( $cek == 1) {
			$pesan_berhasil;
		}
		
		header("Location: " . BASEURL . "admin/CapaianRekomisiPrestasi");
		exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$jml = $this->input->post('jml');
		$tipe = $this->input->post('tipe');
		$tahun = $this->input->post('tahun');
		$dnow = date('Y-m-d H:i:s');
		$jenis = $this->input->post('jenis');

		if( $jenis == 'visiting' ) {

			$database = 'visiting_lecturer';
			$table_id = 'visit_id';
			$table_jml = 'visit_jumlah';
			$table_tipe = 'visit_type';
			$table_datetime = 'visit_datetime';
			$table_tahun = 'tahun_id';

			
		} elseif( $jenis == 'invited' ) {

			$database = 'invited_speaker';
			$table_id = 'invit_id';
			$table_jml = 'invit_jumlah';
			$table_tipe = 'invit_type';
			$table_datetime = 'invit_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'editor' ) {

			$database = 'editor_jurnal';
			$table_id = 'jurnal_id';
			$table_jml = 'jurnal_jumlah';
			$table_tipe = 'jurnal_tipe';
			$table_datetime = 'jurnal_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'penghargaan' ) {

			$database = 'penghargaan';
			$table_id = 'penghargaan_id';
			$table_jml = 'penghargaan_jumlah';
			$table_tipe = 'penghargaan_tipe';
			$table_datetime = 'penghargaan_datetime';
			$table_tahun = 'tahun_id';

		} elseif( $jenis == 'staff_ahli' ) {

			$database = 'staf_ahli';
			$table_id = 'staf_id';
			$table_jml = 'staf_jumlah';
			$table_tipe = 'staf_tipe';
			$table_datetime = 'staf_datetime';
			$table_tahun = 'tahun_id';
		}

		$cek = $this->db->query("UPDATE $database
			SET $table_jml	 = '$jml' , $table_tipe = '$tipe', $table_tahun = '$tahun'
			WHERE $table_id = '$id'");

		if( $cek == 1) {
			$pesan_berhasil;
		}

		header("Location: " . BASEURL . "admin/CapaianRekomisiPrestasi");
		exit();
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');

		if( $jenis == 'visiting' ) {
			$database = "visiting_lecturer";
			$table_id  = "visit_id";

		} elseif ($jenis == 'invited') {
			$database = "invited_speaker";
			$table_id  = "invit_id";

			
		} elseif ($jenis == 'editor') {
			$database = "editor_jurnal";
			$table_id  = "jurnal_id";

			
		} elseif ($jenis == 'penghargaan') {
			$database = "penghargaan";
			$table_id  = "penghargaan_id";

			
		} elseif ($jenis == 'staff_ahli') {
			$database = "staf_ahli";
			$table_id  = "staf_id";

			
		}


		$cek = $this->db->query("DELETE FROM $database WHERE $table_id = '$id' ");
		if( $cek == 1) {
			$pesan_berhasil;
		} 

		header("Location: " . BASEURL .  "admin/CapaianRekomisiPrestasi");
		exit();
	}
}