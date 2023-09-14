<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riset extends CI_Controller {

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
		$data['title'] = 'Riset - LPPM UNUSIA';
		$data['username'] = $email = $this->session->userdata('Username');
		$data['penelitian'] = $this->db->query("SELECT * FROM penelitian LEFT JOIN tahun ON penelitian.penelitian_year = tahun.TahunID");

		$data['tahun'] = $this->db->query("SELECT * FROM tahun ORDER BY tahun ASC")->result_array();



		$this->load->view('main/admin/header', $data);
		$this->load->view('main/admin/topbar');
		$this->load->view('main/admin/riset/page_riset', $data);
		$this->load->view('main/admin/footer',$data);
	}

	public function create()
	{
		$nama_penerbit = $this->input->post('nama');
		$judul = $this->input->post('judul');
		$tahun = $this->input->post('tahun');
		$tipe = $this->input->post('type');

		$targetDirectory = "storage/riset/";
	    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
	    $fileName = $_FILES['pdfFile']['name'];
	    $uploadOk = 1;
	    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	    // Cek apakah file adalah PDF
	    if ($pdfFileType != "pdf") {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hanya File PDF Yang Diperbolehkan</div>');
	        $uploadOk = 0;
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
	    }

	    // Cek apakah unggahan berhasil
	    if ($uploadOk == 0) {
	        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
	    } else {
	        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
	            echo "File " . basename($_FILES["pdfFile"]["name"]) . " berhasil diunggah.";
	        } else {
	            echo "Terjadi kesalahan saat mengunggah file.";
	        }
	    }

	    $data = [
	    	"penelitian_nama" 		=> $nama_penerbit,
	    	"penelitian_judul" 		=> $judul,
	    	"penelitian_year"     	=> $tahun,
	    	"peneletian_type"       => $tipe,
	    	"penelitian_file_name"  => $fileName
	    ];

	    $cek = $this->db->insert("penelitian", $data);
	    if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Riset Berhasil Di Tambah</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Riset Gagal Di Tambah</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		}

	    header("Location: " . BASEURL . "admin/Riset");
        exit();
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama_penerbit = $this->input->post('nama');
		$tipe = $this->input->post('type');
		$judul = $this->input->post('judul');
		$tahun = $this->input->post('tahun');

		$fileName = $_FILES['pdfFile']['name'];

		if( $fileName != '' ) {
			$targetDirectory = "storage/riset/";
		    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
		    $fileName = $_FILES['pdfFile']['name'];
		    $uploadOk = 1;
		    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		    // Cek apakah file adalah PDF
		    if ($pdfFileType != "pdf") {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hanya File PDF Yang Diperbolehkan</div>');
		        $uploadOk = 0;
		        header("Location: " . BASEURL . "admin/Riset");
	        	exit();
		    }

		    // Cek apakah unggahan berhasil
		    if ($uploadOk == 0) {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Tidak Dapat Diupload</div>');
		        header("Location: " . BASEURL . "admin/Riset");
	        	exit();
		    } else {
		        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
		            echo "File " . basename($_FILES["pdfFile"]["name"]) . " berhasil diunggah.";
		        } else {
		            echo "Terjadi kesalahan saat mengunggah file.";
		        }
		    }

		    $sql = "UPDATE penelitian SET penelitian_nama = '$nama_penerbit',
		     penelitian_judul = '$judul', penelitian_year = '$tahun', peneletian_type = '$tipe', penelitian_file_name = '$fileName'  WHERE penelitian_id = '$id' ";

		    

		    
		} else {
			
			$sql = "UPDATE penelitian SET penelitian_nama = '$nama_penerbit',
		     penelitian_judul = '$judul', penelitian_year = '$tahun', peneletian_type = '$tipe'  WHERE penelitian_id = '$id' ";
			
		}


		$cek = $this->db->query($sql);
		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Riset Berhasil Di edit</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Riset Gagal Di edit</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		}

	}

	public function delete()
	{
		$id = $this->input->post('id');

		$pdf = $this->db->query("SELECT * FROM penelitian WHERE penelitian_id = '$id' ")->result_array()[0];

		$path = "storage/riset/" . $pdf['penelitian_file_name'];

		if (file_exists($path)) {
		    if (unlink($path)) {
		        echo "File berhasil dihapus.";
		    } else {
		        echo "Gagal menghapus file.";
		    }
		} else {
		    echo "File tidak ditemukan.";
		}

		$cek = $this->db->query(" DELETE FROM penelitian WHERE penelitian_id = '$id' ");

		if( $cek == 1 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Riset Berhasil Di Hapus</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Riset Gagal Di Hapu</div>');
	        header("Location: " . BASEURL . "admin/Riset");
        	exit();
		}
	}
}
