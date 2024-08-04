<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->model('Kelolapertemuan_model');
        checkRole(1);
       
    }
    public function index()
    {
            $data['title'] = "Home Guru";
            $data['user'] = $this->Guru_model->getUserByEmail($this->session->userdata('email'));
            
            $this->load->view('guru/template/header', $data);
            $this->load->view('guru/template/sidebar', $data);
            $this->load->view('guru/home/index', $data);
            $this->load->view('guru/template/footer');
        
    }
}
