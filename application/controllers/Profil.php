<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function tentang_lppm()
	{
		$data['title'] = 'Tentang LPPM - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/profil/page_tentang_lppm');
		$this->load->view('main/footer');
	}

	public function struktur()
	{
		$data['title'] = 'Pengurus - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/profil/page_struktur');
		$this->load->view('main/footer');
	}

	public function tupoksi_pegawai()
	{
		$data['title'] = 'Tupoksi Pegawai - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/profil/page_tupoksi_pegawai');
		$this->load->view('main/footer');
	}
}
