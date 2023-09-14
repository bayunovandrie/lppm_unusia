<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

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
		$data['title'] = 'Download - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$id_cate = $this->input->post("filter_category");

		if( $id_cate != '' ) {
			
			if( $id_cate == 'all' ) {
				$sql = "";
			} else {
				$sql = " WHERE download_panduan.category_donwload_id = '$id_cate' ";
			}
			
		} else {
			$sql = "";
		}

			
		$data['category'] = $this->db->query("SELECT * FROM category_donwload");
		$data['download'] = $this->db->query("SELECT * FROM download_panduan LEFT JOIN category_donwload ON download_panduan.category_donwload_id = category_donwload.category_id $sql");

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar', $data);
		$this->load->view('main/admin/download/page_download', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function category()
	{
		$data['title'] = 'Category Dokumen - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');

		$data['category'] = $this->db->query("SELECT * FROM category_donwload ");

		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/download/page_category', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{	
		$nama = $this->input->post('nama');
		$category = $this->input->post('category');

		$targetDirectory = "storage/panduan/";
	    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
	    $fileName = $_FILES['pdfFile']['name'];
	    $uploadOk = 1;
	    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	    // Cek apakah file adalah PDF
	    if ($pdfFileType != "pdf") {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hanya File PDF Yang Diperbolehkan</div>');
	        $uploadOk = 0;
	        header("Location: " . BASEURL . "Download");
        	exit();
	    }

	    // Cek apakah unggahan berhasil
	    if ($uploadOk == 0) {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
	        header("Location: " . BASEURL . "Download");
        	exit();
	    } else {
	        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
	            echo "File " . basename($_FILES["pdfFile"]["name"]) . " berhasil diunggah.";
	        } else {
	            echo "Terjadi kesalahan saat mengunggah file.";
	        }
	    }

	    $data = [
	    	"category_donwload_id" 		=> $category,
	    	"panduan_tema" 				=> $nama,
	    	"panduan_name_ekstensi"    	=> $fileName
	    ];

	    $this->db->insert("download_panduan", $data);

	    header("Location: " . BASEURL . "admin/Download");
        exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama_panduan = $this->input->post('nama');
		$category = $this->input->post('category');

		$fileName = $_FILES['pdfFile']['name'];

		if( $fileName != '' ) {
			$targetDirectory = "storage/panduan/";
		    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
		    $fileName = $_FILES['pdfFile']['name'];
		    $uploadOk = 1;
		    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		    // Cek apakah file adalah PDF
		    if ($pdfFileType != "pdf") {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hanya File PDF Yang Diperbolehkan</div>');
		        $uploadOk = 0;
		        header("Location: " . BASEURL . "admin/Download");
	        	exit();
		    }

		    // Cek apakah unggahan berhasil
		    if ($uploadOk == 0) {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
		        header("Location: " . BASEURL . "admin/Download");
	        	exit();
		    } else {
		        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
		            echo "File " . basename($_FILES["pdfFile"]["name"]) . " berhasil diunggah.";
		        } else {
		            echo "Terjadi kesalahan saat mengunggah file.";
		        }
		    }

		    $sql = "UPDATE download_panduan SET category_donwload_id = '$category',
		     panduan_tema = '$nama_panduan', panduan_name_ekstensi = '$fileName' WHERE panduan_id = '$id' ";

		    

		    
		} else {
			
			$sql = "UPDATE download_panduan SET category_donwload_id = '$category',
		     panduan_tema = '$nama_panduan' WHERE panduan_id = '$id' ";
			
		}


		$cek = $this->db->query($sql);
		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Panduan Berhasil Di edit</div>');
	        header("Location: " . BASEURL . "admin/Download");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Panduan Gagal Di edit</div>');
	        header("Location: " . BASEURL . "admin/Download");
        	exit();
		}

	}

	public function delete()
	{
		$id = $this->input->post('id');

		$pdf = $this->db->query("SELECT * FROM download_panduan WHERE panduan_id = '$id' ")->result_array()[0];

		$path = "storage/panduan/" . $pdf['panduan_name_ekstensi'];

		if (file_exists($path)) {
		    if (unlink($path)) {
		        echo "File berhasil dihapus.";
		    } else {
		        echo "Gagal menghapus file.";
		    }
		} else {
		    echo "File tidak ditemukan.";
		}

		$cek = $this->db->query(" DELETE FROM download_panduan WHERE panduan_id = '$id' ");

		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Panduan Berhasil Di Hapus</div>');
	        header("Location: " . BASEURL . "admin/Download");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Panduan Gagal Di Hapu</div>');
	        header("Location: " . BASEURL . "admin/Download");
        	exit();
		}
	}

	public function create_cate()
	{
		$cate = $this->input->post("cate");

		$data = [
			'category_name' => $cate
		];

		$cek = $this->db->insert('category_donwload', $data);
		

		header("Location: " . BASEURL . "admin/Download/category");
		exit();
	}

	public function update_cate()
	{
		$id = $this->input->post('id');
		$cate = $this->input->post('cate');

		$update = $this->db->query("UPDATE category_donwload SET category_name = '$cate' WHERE category_id = '$id' ");

		
		
		header("Location: " . BASEURL . "admin/Download/category");
		exit();
	}

	public function delete_cate()
	{
		$id = $this->input->post('id');

		$cek = $this->db->query("DELETE FROM category_donwload WHERE category_id = '$id' ");
		

		header("Location: " . BASEURL . "admin/Download/category");
		exit();
	}
}