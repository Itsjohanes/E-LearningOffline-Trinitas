<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menilai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Menilai_model');
        $this->load->model('Kelolapertemuan_model');

        // Load the user agent library
        $this->load->library('user_agent');
        checkRole(1);

    }

    public function index()
    {
            // Select siswa from database
            $data['siswa'] = $this->Menilai_model->getSiswa();
            $data['title'] = 'Menilai';
            $data['user'] = $this->Menilai_model->getUserByEmail($this->session->userdata('email'));
            $data['pertemuan'] = $this->Kelolapertemuan_model->getPertemuan();
            $this->load->view('guru/template/header', $data);
            $this->load->view('guru/template/sidebar', $data);
            $this->load->view('guru/menilai/menilai', $data);
            $this->load->view('guru/template/footer');
       
    }

    

    

}
