<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolapertemuan_model');
    }
    function coba(){
        $this->load->view('coba');
    }
    public function index()
    {
        $data['title'] = "Home";
        $this->load->view('halaman_awal/header.php', $data);
        $this->load->view('halaman_awal/index.php');
        $this->load->view('halaman_awal/footer.php');
    }
   
    
}
