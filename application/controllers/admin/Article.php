<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->database(); // Memuat Library Database di konstruktor
    }

	public function index()
	{
		$data['title'] = 'Article - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['article'] = $this->db->query("SELECT * FROM article");



		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/article/page_article', $data);
		$this->load->view('main/footer',$data);
	}

	public function add_article()
	{
		$data['title'] = 'Tambah Article - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/article/page_add_article', $data);
		$this->load->view('main/footer',$data);
	}
	public function edit_article()
	{
		$id = $this->input->get('id');
		$data['title'] = 'Edit Article - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['article'] = $this->db->query("SELECT * FROM article WHERE article_id = '$id' ")->result_array()[0];

		$this->load->view('main/header', $data);
		$this->load->view('main/topbar');
		$this->load->view('main/article/page_edit_article', $data);
		$this->load->view('main/footer',$data);
	}

	public function create()
	{
		$judul = $this->input->post('judul');
		$publikasi = $this->input->post('publikasi');
		$judul = $this->input->post('judul');
		$body = $this->input->post('body');
		$type = $this->input->post('type');

		$targetDirectory = "assets2/images/article/";
	    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
	    $fileName = $_FILES['image']['name'];
	    $uploadOk = 1;
	    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	    

	    // Cek apakah unggahan berhasil
	    if ($uploadOk == 0) {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
	        header("Location: " . BASEURL . "Article");
        	exit();
	    } else {
	        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
	            echo "File " . basename($_FILES["image"]["name"]) . " berhasil diunggah.";
	        } else {
	            echo "Terjadi kesalahan saat mengunggah file.";
	        }
	    }

	    $data = [
	    	"article_type" => $type,
	    	"article_judul" => $judul,
	    	"article_img" => $fileName,
	    	"article_body" => $body,
	    	"created_at" => $publikasi
	    ];

	    $this->db->insert("article", $data);
	    header("Location: " . BASEURL . "Article");
	    exit();
	}

	public function edit()
	{
		$judul = $this->input->post('judul');
		$publikasi = $this->input->post('publikasi');
		$judul = $this->input->post('judul');
		$body = $this->input->post('body');
		$type = $this->input->post('type');
		$id = $this->input->post('id');

	

		$fileName = $_FILES['image']['name'];

		if( $fileName != '' ) {
			$targetDirectory = "assets2/images/article/";
		    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
		    $uploadOk = 1;
		    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		    

		    // Cek apakah unggahan berhasil
		    if ($uploadOk == 0) {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
		        header("Location: " . BASEURL . "Article");
	        	exit();
		    } else {
		        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
		            echo "File " . basename($_FILES["image"]["name"]) . " berhasil diunggah.";
		        } else {
		            echo "Terjadi kesalahan saat mengunggah file.";
		        }
		    }
		    $sql = "UPDATE article SET article_judul = '$judul', article_img = '$fileName', article_body = '$body', article_type = '$type', created_at = '$publikasi'  WHERE article_id = '$id' ";
		} else {

			$sql = "UPDATE article SET article_judul = '$judul', article_body = '$body', article_type = '$type', created_at = '$publikasi'  WHERE article_id = '$id' ";
		}

		$cek = $this->db->query($sql);

		header("Location: " .BASEURL. "Article" );
		exit();

	}

	public function delete()
	{
		$id = $this->input->post('id');

		$foto = $this->db->query("SELECT * FROM article WHERE article_id = '$id' ")->result_array()[0];

		$path = "assets2/images/article/" . $foto['article_img'];

		if (file_exists($path)) {
		    if (unlink($path)) {
		        echo "File berhasil dihapus.";
		    } else {
		        echo "Gagal menghapus file.";
		    }
		} else {
		    echo "File tidak ditemukan.";
		}

		$this->db->query("DELETE FROM article WHERE article_id = '$id' ");

		header("Location: " . BASEURL . "Article");
		exit();
	}
}