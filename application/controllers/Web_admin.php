<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_admin extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
	{
            if(!$this->session->flashdata('msg')){
                $data['msg'] = "Selamat Datang! Silahkan lakukan login.";   
            }
            else{
                $data['msg'] = "Terjadi Kesalahan.";   
            }
            $this->load->view('_templates/login', $data);
	}
        
        public function login_verifikasi()
	{
            $u = $this->input->post('username');
            $p = $this->input->post('password');
            $check = $this->dpmptsp_model->login($u, $p);
            if(!$check->num_rows()){
                $this->session->set_flashdata('msg', 1);
                redirect('Web_admin');
            }
            else{
                $login_data = array(
                    'nama'  => $check->row()->nama,
                    'tipe'     => $check->row()->tipe,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($login_data);
                if($check->row()->tipe == 1){
                    $this->session->set_userdata('akses', 'Administrator');
                    redirect('Back_o/berita', 'refresh');
                }
                else if($check->row()->tipe == 2){
                    $this->session->set_userdata('akses', 'Admin Web');
                    redirect('Back_o/berita', 'refresh');
                }
                else{
                    $this->session->set_userdata('akses', 'Operator Bidang');
                    redirect('Back_o/skm_total', 'refresh');
                }
            }
	}
        
        public function logout()
	{
            $this->session->sess_destroy();
            redirect('Web_admin');
	}
}