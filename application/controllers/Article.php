<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	
    public function index()
    {
        $data['title'] = 'Article - LPPM UNUSIA';
        $tipe = $this->input->get('type');

        $data['article'] = $this->db->query("SELECT * FROM article WHERE article_type = '$tipe' ");

        $this->load->view('main/header', $data);
        $this->load->view('main/topbar');
        $this->load->view('main/article/page_article',$data);
        $this->load->view('main/footer',$data);
    }

    public function baca()
    {
        $data['title'] = 'Article - LPPM UNUSIA';
        $id = $this->input->get('id');

        $data['article'] = $this->db->query("SELECT * FROM article WHERE article_id = '$id' ")->result_array()[0];

        $datetimeString = $data['article']['created_at'];
        $dateTime = new DateTime($datetimeString);
        $monthName = $dateTime->format('F');
        $dayName = $dateTime->format('l');
        $formattedDateTime = $dateTime->format('d') . ' ' . $monthName . ' ' . $dateTime->format('Y');

        $data['publikasi'] = $formattedDateTime;

        $this->load->view('main/header', $data);
        $this->load->view('main/topbar');
        $this->load->view('main/article/page_baca_article',$data);
        $this->load->view('main/footer',$data);
    }
}