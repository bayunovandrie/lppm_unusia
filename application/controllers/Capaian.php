<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capaian extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Laporan Hak Kekayaan Intelektual - LPPM UNUSIA';

		// data publikasi HKI
		$data['ciptaan'] = $this->db->query("SELECT hki_jumlah FROM laporan_hki WHERE hki_tipe = 1 ")->result_array();
		$data['paten'] = $this->db->query("SELECT hki_jumlah FROM laporan_hki WHERE hki_tipe = 2 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_capain');
		$this->load->view('main/footer',$data);
	}

	public function laporan_pengabdian()
	{
		$data['title'] = 'Laporan Pengabdian - LPPM UNUSIA';

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_capaian_pengabdian');
		$this->load->view('main/footer',$data);
	}

	public function laporan_hki()
	{
		$data['title'] = 'Laporan Prosiding dan Media Massa - LPPM UNUSIA';

		// data publikasi media massa
		$data['media_nasional'] = $this->db->query("SELECT media_jumlah FROM media_massa WHERE media_type = 1 ")->result_array();

		$data['media_internasional'] = $this->db->query("SELECT media_jumlah FROM media_massa WHERE media_type = 2 ")->result_array();

		// data publikasi prosiding
		$data['seminar_wilayah'] = $this->db->query("SELECT prosiding_jumlah FROM publikasi_prosiding WHERE prosiding_type = 1 ")->result_array();
		$data['seminar_nasional'] = $this->db->query("SELECT prosiding_jumlah FROM publikasi_prosiding WHERE prosiding_type = 2 ")->result_array();
		$data['seminar_internasional'] = $this->db->query("SELECT prosiding_jumlah FROM publikasi_prosiding WHERE prosiding_type = 3 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_laporan_hki');
		$this->load->view('main/footer',$data);
	}

	public function rekomisi_dosen()
	{
		$data['title'] = 'Laporan Sitasi Karya Ilimiah - LPPM UNUSIA';

		// data karya ilmiah
		$data['karya_ilmiah'] = $this->db->query("SELECT karya_ilmiah_jumlah FROM karya_ilmiah WHERE karya_ilmiah_type = 1 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_laporan_rekomisi_dosen');
		$this->load->view('main/footer',$data);
	}

	public function publikasi_jurnal()
	{
		$data['title'] = 'Laporan Publikasi Jurnal - LPPM UNUSIA';

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		// data publikasi jurnal
		$data['jurnal_nasional_tak_terakreditasi'] = $this->db->query("SELECT publikasi_jumlah FROM publikasi_jurnal WHERE publikasi_type = 1")->result_array();

		$data['jurnal_nasional_terakreditasi'] = $this->db->query("SELECT publikasi_jumlah FROM publikasi_jurnal WHERE publikasi_type = 2")->result_array();

		$data['jurnal_nasional'] = $this->db->query("SELECT publikasi_jumlah FROM publikasi_jurnal WHERE publikasi_type = 3")->result_array();

		$data['jurnal_nasional_bereputasi'] = $this->db->query("SELECT publikasi_jumlah FROM publikasi_jurnal WHERE publikasi_type = 4")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_laporan_publikasi_jurnal');
		$this->load->view('main/footer',$data);
	}

	public function publikasi_buku()
	{
		$data['title'] = 'Laporan Publikasi Buku/Book Chapter - LPPM UNUSIA';

		// publikasi buku-book-chapter
		$data['tingkat_nasional'] = $this->db->query("SELECT publikasi_buku_jumlah FROM publikasi_buku WHERE publikasi_buku_type = 1 ")->result_array();

		$data['tingkat_internasional'] = $this->db->query("SELECT publikasi_buku_jumlah FROM publikasi_buku WHERE publikasi_buku_type = 2 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_laporan_publikasi_buku');
		$this->load->view('main/footer',$data);
	}

	public function publikasi()
	{
		$data['title'] = 'Laporan Rekomisi Prestasi dan Kinerja Peneliti/Pengabdi - LPPM UNUSIA';

		// visiting lecturer
		$data['pt_tingkat_nasional'] = $this->db->query("SELECT visit_jumlah FROM visiting_lecturer WHERE visit_type = 1 ")->result_array();
		$data['pt_tingkat_internasional'] = $this->db->query("SELECT visit_jumlah FROM visiting_lecturer WHERE visit_type = 2 ")->result_array();

		// data invited lecturer
		$data['forum_tingkat_nasional'] = $this->db->query("SELECT invit_jumlah FROM invited_speaker WHERE invit_type = 1 ")->result_array();
		$data['forum_tingkat_internasional'] = $this->db->query("SELECT invit_jumlah FROM invited_speaker WHERE invit_type = 2 ")->result_array();

		// data publikasi editor
		$data['jurnal_tingkat_nasional'] = $this->db->query("SELECT jurnal_jumlah FROM editor_jurnal WHERE jurnal_tipe = 1 ")->result_array();
		$data['jurnal_tingkat_internasional'] = $this->db->query("SELECT jurnal_jumlah FROM editor_jurnal WHERE jurnal_tipe = 2 ")->result_array();

		// data publikasi penghargaan
		$data['peng_nasional'] = $this->db->query("SELECT penghargaan_jumlah FROM penghargaan WHERE penghargaan_tipe = 1 ")->result_array();
		$data['peng_internasional'] = $this->db->query("SELECT penghargaan_jumlah FROM penghargaan WHERE penghargaan_tipe = 2 ")->result_array();

		$data['lembaga_nasional'] = $this->db->query("SELECT staf_jumlah FROM staf_ahli WHERE staf_tipe = 1 ")->result_array();
		$data['lembaga_internasional'] = $this->db->query("SELECT staf_jumlah FROM staf_ahli WHERE staf_tipe = 2 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_laporan_publikasi');
		$this->load->view('main/footer',$data);
	}

	public function teknologi()
	{
		$data['title'] = 'Laporan Teknologi Tepat Guna - LPPM UNUSIA';

		// data teknologi
		$data['teknologi'] = $this->db->query("SELECT teknologi_jumlah FROM laporan_teknologi WHERE teknologi_tipe = 1 ")->result_array();

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/capaian/page_teknologi');
		$this->load->view('main/footer',$data);
	}
}