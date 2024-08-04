<?php

class Materi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Materi_model');
        $this->load->model('Kelolapertemuan_model');
        checkRole(0);
    }

    public function index() {
            $data['title'] = "Materi";
            $data['pertemuan'] = $this->Kelolapertemuan_model->getPertemuan();
            $data['user'] = $this->Materi_model->getUserByEmail($this->session->userdata('email'));
            $this->load->view('siswa/template/header', $data);
            $this->load->view('siswa/template/sidebar', $data);
            $this->load->view('siswa/materi/materi', $data);
            $this->load->view('siswa/template/footer');
        
    }
}
