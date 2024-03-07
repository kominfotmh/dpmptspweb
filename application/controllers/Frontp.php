<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontp extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
	{
            $data['b'] = $this->dpmptsp_model->select('t_berita', 'id')->result();
            $data['g'] = $this->dpmptsp_model->select('t_galeri', 'id')->result();
            $data['d'] = $this->dpmptsp_model->select('t_dokumen', 'id')->result();
            $data['p'] = $this->dpmptsp_model->select('t_publikasi', 'id')->row();
            $data['info_pel'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Pelayanan');
            $data['info_pm'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Penanaman Modal');
            $data['lain'] = $this->dpmptsp_model->select('t_info_lainnya', 'id')->row();
            $data['isi'] = 'depan/halaman_depan';
            $this->load->view('_templates/front', $data);
	}
        
        public function berita_all()
	{
            $data['info_pel'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Pelayanan');
            $data['info_pm'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Penanaman Modal');
            $data['lain'] = $this->dpmptsp_model->select('t_info_lainnya', 'id')->row();
            $data['list'] = $this->dpmptsp_model->select('t_berita', 'id')->result();
            $data['isi'] = 'depan/pub_berita';
            $this->load->view('_templates/front_berita', $data);
	}
        
        public function berita_read()
	{
            $data['info_pel'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Pelayanan');
            $data['info_pm'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Penanaman Modal');
            $data['lain'] = $this->dpmptsp_model->select('t_info_lainnya', 'id')->row();
            $idb = $this->uri->segment('3');
            $get_berita = $this->dpmptsp_model->select_where('t_berita', 'id', $idb);
            $data['read_b'] = $get_berita->row();
            $data['isi'] = 'depan/pub_berita_read';
            $this->load->view('_templates/front_berita', $data);
	}
        
        public function getinfo()
	{   
            $q = strval($_GET['q']);
            $data['recs'] = $this->dpmptsp_model->select_like('t_info_syarat', 'izin', $q);
            $this->load->view('depan/info_syarat', $data);
        }
        
        public function skm()
	{
            $data['info_pel'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Pelayanan');
            $data['info_pm'] = $this->dpmptsp_model->select_where('t_info', 'jenis', 'Penanaman Modal');
            $data['lain'] = $this->dpmptsp_model->select('t_info_lainnya', 'id')->row();
            $data['isi'] = 'depan/skm';
            $this->load->view('_templates/front_skm', $data);
	}
        
        public function skm_tambah_do()
	{
            $jk = $this->input->post('jk');
            $p = $this->input->post('pend');
            $u = $this->input->post('usia');
            $k = $this->input->post('kerja');
            $l = $this->input->post('layanan');
            $q1 = $this->input->post('q1');
            $q2 = $this->input->post('q2');
            $q3 = $this->input->post('q3');
            $q4 = $this->input->post('q4');
            $q5 = $this->input->post('q5');
            $q6 = $this->input->post('q6');
            $q7 = $this->input->post('q7');
            $q8 = $this->input->post('q8');
            $q9 = $this->input->post('q9');
            
            
            $data = array(
                    'jenis_kelamin' => $jk,
                    'pendidikan' => $p,
                    'usia' => $u,
                    'pekerjaan' => $k,
                    'layanan' => $l,
                    'pertanyaan_1' => $q1,
                    'pertanyaan_2' => $q2,
                    'pertanyaan_3' => $q3,
                    'pertanyaan_4' => $q4,
                    'pertanyaan_5' => $q5,
                    'pertanyaan_6' => $q6,
                    'pertanyaan_7' => $q7,
                    'pertanyaan_8' => $q8,
                    'pertanyaan_9' => $q9,
                    'tanggal' => date('Y-m-d'),
                    'jam' => date('h:m:s')
                    );
            $this->dpmptsp_model->add('t_skm', $data);
            redirect('Frontp/skm', 'refresh');
	}
        
        public function feedback()
	{
            $jenis = $this->input->post('pilih');
            $kat = $this->input->post('kategori');
            $isi = $this->input->post('isi');
            $tgl = date('Y-m-d');
            
            $data = array(
                    'jenis' => $jenis,
                    'kategori' => $kat,
                    'isi' => $isi,
                    'tgl' => $tgl
                    );
            $data2['berhasil'] = 1;
            $this->dpmptsp_model->add('t_feedback', $data);
            redirect('Frontp', $data2);
	}
        
}