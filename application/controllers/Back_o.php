<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_o extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $logged_in = $this->session->userdata('logged_in');
            if( !$logged_in ){
                redirect('Web_admin');
            }
        }
        
        public function berita()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select('t_berita', 'id');
            $data['isi'] = 'berita/berita';
            $this->load->view('_templates/template', $data);
	}
        
        public function berita_tambah()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['isi'] = 'berita/tambah';
            $this->load->view('_templates/template', $data);
	}
        
        public function berita_tambah_do()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $this->load->library('image_lib');
            $tgl = date('Y-m-d');
            $judul = $this->input->post('judul');
            $kat = $this->input->post('tag');
            $isi = $this->input->post('isi');
            $last_id = $this->dpmptsp_model->get_last_id('t_berita')->row();
            
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'assets/img/berita';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $last_id->id_akhir+1;
                
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    
                    $configer = array(
                        'image_library' => 'gd2',
                        'source_image' => 'assets/img/berita/'.$picture,
                        'maintain_ratio' => FALSE,
                        'width' => 3200,
                        'height' => 1800,
                    );
                    $this->image_lib->clear();
                    $this->image_lib->initialize($configer);
                    $this->image_lib->resize();
                    
                    $data = array(
                    'tgl_berita' => $tgl,
                    'oleh' => $this->session->userdata('nama'),
                    'judul' => $judul,
                    'tag' => $kat,
                    'isi' => $isi,
                    'gambar' => $picture
                    );
                    $this->dpmptsp_model->add('t_berita', $data);
                }
                else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            redirect('Back_o/berita');
	}
        
        
        public function galeri()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select('t_galeri', 'id');
            $data['isi'] = 'galeri/galeri';
            $this->load->view('_templates/template', $data);
	}
        
        public function galeri_tambah()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['isi'] = 'galeri/tambah';
            $this->load->view('_templates/template', $data);
	}
        
        public function galeri_tambah_do()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $this->load->library('image_lib');
            $tgl = date('Y-m-d');
            $des = $this->input->post('deskripsi');
            $last_id = $this->dpmptsp_model->get_last_id('t_galeri')->row();
            
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'assets/img/galeri';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $last_id->id_akhir+1;
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                    
                    $configer = array(
                        'image_library' => 'gd2',
                        'source_image' => 'assets/img/galeri/'.$picture,
                        'maintain_ratio' => FALSE,
                        'width' => 3000,
                        'height' => 2250,
                    );
                    $this->image_lib->clear();
                    $this->image_lib->initialize($configer);
                    $this->image_lib->resize();
                    
                $data = array(
                    'tgl_galeri' => $tgl,
                    'oleh' => "Dora 1",
                    'deskripsi' => $des,
                    'gambar' => $picture
                    );
                    $this->dpmptsp_model->add('t_galeri', $data);
                }
                else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            redirect('Back_o/galeri');
	}
        
        public function publikasi()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['all'] = $this->dpmptsp_model->select('t_publikasi', 'id')->row();
            $data['isi'] = 'publikasi/publikasi';
            $this->load->view('_templates/template', $data);
	}
        
        public function publikasi_update_do()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $id = $this->uri->segment('3');
            $invest = $this->input->post('investasi');
            $ikm = $this->input->post('ikm');
            $ras = $this->input->post('rasio');
            $data = array(
                    'realisasi' => $invest,
                    'ikm' => $ikm,
                    'rasio_tk' => $ras
		);
            $this->dpmptsp_model->update('t_publikasi', 'id', $id, $data);
            redirect('Back_o/publikasi');
	}
        
        public function skm_total()
	{
            if($this->session->userdata('tipe') == 2){
                redirect('Back_o/berita', 'refresh');
            }
            
            $t = $this->dpmptsp_model->select('t_skm', 'id');
            $sum_skm = $this->dpmptsp_model->sum_skm();
            $nr1 = $sum_skm->row()->sq1/$t->num_rows();
            $nr2 = $sum_skm->row()->sq2/$t->num_rows();
            $nr3= $sum_skm->row()->sq3/$t->num_rows();
            $nr4 = $sum_skm->row()->sq4/$t->num_rows();
            $nr5 = $sum_skm->row()->sq5/$t->num_rows();
            $nr6 = $sum_skm->row()->sq6/$t->num_rows();
            $nr7 = $sum_skm->row()->sq7/$t->num_rows();
            $nr8 = $sum_skm->row()->sq8/$t->num_rows();
            $nr9 = $sum_skm->row()->sq9/$t->num_rows();
            $tnr = $nr1+$nr2+$nr3+$nr4+$nr5+$nr6+$nr7+$nr8+$nr9;
            $skm = $tnr/9;
            
            $data['skm'] = $skm;
            $data['sum_skm'] = $sum_skm;
            $data['t'] = $t;
            $data['isi'] = 'skm/total';
            $this->load->view('_templates/template', $data);
	}
        
        public function skm_detil()
	{
            if($this->session->userdata('tipe') == 2){
                redirect('Back_o/berita', 'refresh');
            }
            
            $jk = $this->db->query("select count(case when jenis_kelamin='Pria' then 1 end) as pria,
                                    count(case when jenis_kelamin='Wanita' then 1 end) as wanita FROM t_skm");
            $pend = $this->db->query("select count(case when pendidikan='SD' then 1 end) as sd, count(case when pendidikan='SMP' then 1 end) as smp, 
                                    count(case when pendidikan='SMA' then 1 end) as sma, count(case when pendidikan='D3' then 1 end) as d3,  
                                    count(case when pendidikan='S1' then 1 end) as s1, count(case when pendidikan='S2' then 1 end) as s2 FROM t_skm");
            $kerja = $this->db->query("select count(case when pekerjaan='PNS' then 1 end) as pns, count(case when pekerjaan='TNI' then 1 end) as tni, 
                                    count(case when pekerjaan='POLRI' then 1 end) as polri, count(case when pekerjaan='Swasta' then 1 end) as swasta,  
                                    count(case when pekerjaan='Wirausaha' then 1 end) as wirausaha, count(case when pekerjaan='Lainnya' then 1 end) as lainnya FROM t_skm");
            
            
            $data['jk'] = $jk;
            $data['pend'] = $pend;
            $data['kerja'] = $kerja;
            $data['isi'] = 'skm/detil';
            $this->load->view('_templates/template', $data);
	}
        
        public function saran()
	{
            if($this->session->userdata('tipe') == 2){
                redirect('Back_o/berita', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select_where('t_feedback', 'jenis', 'Saran');
            $data['isi'] = 'forms/forms';
            $this->load->view('_templates/template', $data);
	}
        
        public function pengaduan()
	{
            if($this->session->userdata('tipe') == 2){
                redirect('Back_o/berita', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select_where('t_feedback', 'jenis', 'Pengaduan');
            $data['isi'] = 'forms/forms_pengaduan';
            $this->load->view('_templates/template', $data);
	}
        
        public function beranda()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['info'] = $this->dpmptsp_model->select('t_info', 'id');
            $data['lain'] = $this->dpmptsp_model->select('t_info_lainnya', 'id')->row();
            $data['isi'] = 'beranda/beranda';
            $this->load->view('_templates/template', $data);
	}
        
        public function beranda_update()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $id = $this->uri->segment('3');
            $data['kontak'] = $this->dpmptsp_model->select_where('t_info', 'id', $id);
            $data['isi'] = 'beranda/beranda_update';
            $this->load->view('_templates/template', $data);
	}
        
        public function beranda_update_do()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $nama = $this->input->post('nama');
            $kontak = $this->input->post('kontak');
            $id = $this->uri->segment('3');
            $data = array(
                    'nama' => $nama,
                    'kontak' => $kontak
		);
            $this->dpmptsp_model->update('t_info', 'id', $id, $data);
            redirect('Back_o/beranda');
	}
        
        public function beranda_updatelainnya_do()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $v = $this->input->post('video');
            $e = $this->input->post('email');
            $t = $this->input->post('telp');
            $p = $this->input->post('pos');
            $id = $this->uri->segment('3');
            $data = array(
                'video' => $v,
                'email' => $e,
                'telp' => $t,
                'pos' => $p
		);
            $this->dpmptsp_model->update('t_info_lainnya', 'id', $id, $data);
            redirect('Back_o/beranda');
	}
        
        public function info_syarat()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select('t_info_syarat', 'id');
            $data['isi'] = 'beranda/info_syarat';
            $this->load->view('_templates/template', $data);
	}
        
        public function info_syarat_tambah_do()
        {
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $izin = $this->input->post('izin');
            $sop = $this->input->post('sop');
            $dinas = $this->input->post('dinas');
            $syarat = $this->input->post('syarat');
            $akses = $this->input->post('akses');
            $data = array(
                'izin' => $izin,
                'syarat' => $syarat,
                'sop' => $sop,
                'akses' => $akses,
                'dinas_teknis' => $dinas
                );
                $this->dpmptsp_model->add('t_info_syarat', $data);
                redirect('Back_o/info_syarat', 'refresh');
        }
        
        public function dokumen()
	{
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $data['t'] = $this->dpmptsp_model->select('t_dokumen', 'id');
            $data['isi'] = 'dokumen/dokumen';
            $this->load->view('_templates/template', $data);
	}
        
        public function dokumen_tambah_do()
        {
            if($this->session->userdata('tipe') == 3){
                redirect('Back_o/skm_total', 'refresh');
            }
            
            $jenis = $this->input->post('jenis');
            $nama = $this->input->post('nama');
            $tipe = $this->input->post('tipe_file');
            $link = $this->input->post('link');
            $data = array(
                'jenis_dok' => $jenis,
                'nama' => $nama,
                'tipe_file' => $tipe,
                'link_dok' => $link
                );
                $this->dpmptsp_model->add('t_dokumen', $data);
                redirect('Back_o/dokumen', 'refresh');
        }
}