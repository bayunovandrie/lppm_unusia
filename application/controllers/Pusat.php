<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pusat extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function pusinus()
	{
		$data['title'] = 'Pusat Kajian Islam Nusantara - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_pusinus',$data);
		$this->load->view('main/footer',$data);
	}

	public function pusdak()
	{
		$data['title'] = 'Pusat Studi Dan Pendidikan Anti-Korupsi - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_pusdak',$data);
		$this->load->view('main/footer',$data);

	}

	public function puseknis()
	{
		$data['title'] = 'Pusat Studi Ekonomi Dan Bisnis - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_puseknis',$data);
		$this->load->view('main/footer',$data);

	}

	public function pasti()
	{
		$data['title'] = 'Pusat Studi Teknik Informatika - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_pasti',$data);
		$this->load->view('main/footer',$data);

	}

	public function psga()
	{
		$data['title'] = 'Pusat Studi Gender dan Anak - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_pusbukok',$data);
		$this->load->view('main/footer',$data);

	}

	public function sdgs_center()
	{
		$data['title'] = 'SDGs Center - LPPM UNUSIA';

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/pusat/page_pkbm',$data);
		$this->load->view('main/footer',$data);

	}


}