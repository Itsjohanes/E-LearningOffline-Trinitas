<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelolapertemuan_model');
        checkRole(0); 
    }
    public function index()
    {

            $data['title'] = "Home Siswa";
            $data['user'] = $this->Siswa_model->getUserByEmail($this->session->userdata('email'));
            $data['jumlahSiswa'] = $this->Siswa_model->getJumlahSiswa();

            $this->load->view('siswa/template/header', $data);
            $this->load->view('siswa/template/sidebar', $data);
            $this->load->view('siswa/home/index', $data);
            $this->load->view('siswa/template/footer');
        
    } 
    
}
