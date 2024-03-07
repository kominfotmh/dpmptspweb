<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dash extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
        }
        
	public function index()
	{
            $data['isi'] = 'public/dashboard';
            $this->load->view('_templates/nav', $data);
	}
        
        
        public function periode()
	{
            $data['isi'] = 'adm/setup';
            $this->load->view('_templates/template', $data);
	}
        
        public function setup()
	{
            $data['p'] = $this->eplan_model->select('m_periode','id');
            $data['header'] = "Master Data / Atur Periode Aktif";
            $data['isi'] = 'master/setup';
            $this->load->view('_templates/template', $data);
	}
        
        public function setup_doadd()
	{
            $data = array(
                                'aktif' => 0,
                                'tahun_awal' => $this->input->post('awal'),
                                'tahun_akhir' => $this->input->post('akhir')
		);
            $this->eplan_model->add('m_periode', $data);
            redirect('main/setup', 'refresh');
	}
        
        public function setup_aktif()
	{
            $id = $this->uri->segment('3');
            $q = $this->db->query('UPDATE m_periode SET aktif = 0 WHERE aktif = 1');
            $data = array(
                                'aktif' => 1
		);
            $this->eplan_model->update('m_periode', 'id', $id, $data);
            redirect('main/setup', 'refresh');
	}
        
        public function program()
	{
            $data['prog'] = $this->eplan_model->select('m_program','kode');
            $data['header'] = "Master Data / Program";
            $data['isi'] = 'master/program';
            $this->load->view('_templates/template', $data);
	}
        
        public function program_dotambah()
	{
            $kode = $this->eplan_model->select('m_kode','kode')->row();
            $data = array(
                                'kode' => $kode->kode.".".$this->input->post('kode'),
                                'program' => $this->input->post('program')
		);
            $this->eplan_model->add('m_program', $data);
            redirect('main/program', 'refresh');
	}
                       
        public function kegiatan()
	{
            
            if($this->input->post('prg') == TRUE){
                $pr = $this->input->post('prg');
                $s = $this->input->post('prg');
            }
            
            else if ($this->uri->segment('3') == TRUE){
                $pr = $this->uri->segment('3');
                $s = $this->uri->segment('3');
            }
            
            else{
                $pr = "all";
                $s = "";
            }
            

            if($pr == "all"){
                $keg = $this->eplan_model->select('m_kegiatan','kode');
            }
            else{
                $keg = $this->eplan_model->select_where('m_kegiatan','program', $pr, 'kode');
            }
            
            $data['selected'] = $s;
            $data['prog'] = $this->eplan_model->select('m_program','kode');
            $data['keg'] = $keg;
            $data['header'] = "Master Data / Kegiatan";
            $data['isi'] = 'master/kegiatan';
            $this->load->view('_templates/template', $data);
	}
        
        public function kegiatan_dotambah()
	{
            $data = array(
                                'kode' => $this->input->post('program').".".$this->input->post('kode'),
                                'kegiatan' => $this->input->post('kegiatan'),
                                'program' => $this->input->post('program')
		);
            $this->eplan_model->add('m_kegiatan', $data);
            redirect('main/kegiatan/'.$this->input->post('program'), 'refresh');
	}
        
}