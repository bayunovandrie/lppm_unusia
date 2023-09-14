<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    

    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {

        if ($this->form_validation->run() == false) {           
       
            $this->load->view('auth/page_login');
       
        } else {
            //validation success
            $this->login();
        }
        
    }

    public function login()
    {

        $username      = $this->input->post('username');
        $password = $this->input->post('password');

        $user       = $this->db->query("SELECT * FROM admin_login WHERE username = '$username' ")->row_array();
        
        if ($user != null) {

            $hashed_password_from_db = $user['password'];
            if (password_verify($password, $hashed_password_from_db)) {

                $data = [
                    'Username' => $user['username'],
                    'status' => 'kusam'

                ];
                $this->session->set_userdata($data);                                
                header("Location: " . BASEURL . "admin/Home");
                exit();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                header("Location: " . BASEURL . "admin/auth");
                exit();
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-sm alert-danger" role="alert">Incorect Email & Password!</div>');
            header("Location: " . BASEURL . "admin/auth");
            exit();
        }

    }


    public function logout()
    {
        $this->session->sess_destroy();
        header("Location: " . BASEURL . "Home");
        exit();
    }
}
