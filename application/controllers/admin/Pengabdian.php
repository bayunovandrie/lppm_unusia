<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengabdian extends CI_Controller {

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
		$data['title'] = 'Pengabdian - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');
		$data['penelitian'] = $this->db->query("SELECT * FROM pengabdian LEFT JOIN tahun ON pengabdian.pengabdian_tahun = tahun.TahunID");

		$data['tahun'] = $this->db->query("SELECT * FROM tahun")->result_array();



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/pengabdian/page_pengabdian', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$tema = $this->input->post('tema');
		$deks = $this->input->post('deskripsi');
		$tahun = $this->input->post('tahun');
		$tipe = $this->input->post('type');

		$targetDirectory = "assets2/images/pengabdian/";
	    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
	    $fileName = $_FILES['image']['name'];
	    $uploadOk = 1;
	    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	    

	    // Cek apakah unggahan berhasil
	    if ($uploadOk == 0) {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
	        header("Location: " . BASEURL . "admin/Pengabdian");
        	exit();
	    } else {
	        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
	            echo "File " . basename($_FILES["image"]["name"]) . " berhasil diunggah.";
	        } else {
	            echo "Terjadi kesalahan saat mengunggah file.";
	        }
	    }

	    $data = [
	    	"pengabdian_tahun"  => $tahun,
	    	"pengabdian_tema"   => $tema,
	    	"pengabdian_img"    => $fileName,
	    	"pengabdian_desk"   => $deks,
	    	"pengabdian_tipe"   => $tipe
	    ];

	    $this->db->insert("Pengabdian", $data);

	    header("Location: " . BASEURL . "admin/Pengabdian");
	    exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$tema_pengabdian = $this->input->post('tema');
		$desk = $this->input->post('deskripsi');
		$tipe = $this->input->post('type');
		$tahun = $this->input->post('tahun');

		$fileName = $_FILES['image']['name'];

		if( $fileName != '' ) {
			$targetDirectory = "assets2/images/pengabdian/";
		    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
		    $fileName = $_FILES['image']['name'];
		    $uploadOk = 1;
		    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		    

		    // Cek apakah unggahan berhasil
		    if ($uploadOk == 0) {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
		        header("Location: " . BASEURL . "admin/Pengabdian");
	        	exit();
		    } else {
		        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
		            echo "File " . basename($_FILES["image"]["name"]) . " berhasil diunggah.";
		        } else {
		            echo "Terjadi kesalahan saat mengunggah file.";
		        }
		    }

			$sql = "UPDATE pengabdian SET pengabdian_tahun = '$tahun', pengabdian_tema = '$tema_pengabdian', pengabdian_img = '$fileName', pengabdian_desk = '$desk', pengabdian_tipe = '$tipe'  WHERE pengabdian_id = '$id' ";

			    

			    
			} else {
			
			$sql = "UPDATE pengabdian SET pengabdian_tahun = '$tahun', pengabdian_tema = '$tema_pengabdian', pengabdian_desk = '$desk', pengabdian_tipe = '$tipe'  WHERE pengabdian_id = '$id' ";
			
		}


		$cek = $this->db->query($sql);

		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengabdian Berhasil Di edit</div>');
	        header("Location: " . BASEURL . "admin/Pengabdian");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengabdian Gagal Di edit</div>');
	        header("Location: " . BASEURL . "admin/Pengabdian");
        	exit();
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$foto = $this->db->query("SELECT * FROM pengabdian WHERE pengabdian_id = '$id' ")->result_array()[0];

		$path = "assets2/images/pengabdian/" . $foto['pengabdian_img'];

		if (file_exists($path)) {
		    if (unlink($path)) {
		        echo "File berhasil dihapus.";
		    } else {
		        echo "Gagal menghapus file.";
		    }
		} else {
		    echo "File tidak ditemukan.";
		}



		$cek = $this->db->query(" DELETE FROM pengabdian WHERE pengabdian_id = '$id' ");

		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengabdian Berhasil Di Hapus</div>');
	        header("Location: " . BASEURL . "admin/Pengabdian");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengabdian Gagal Di Hapu</div>');
	        header("Location: " . BASEURL . "admin/Pengabdian");
        	exit();
		}
	}
}