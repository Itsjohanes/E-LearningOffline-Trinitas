<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guruprofile extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model'); // Load the Profile_model
        checkRole(1);
    }

    public function index()
    {
            $data['title'] = "Profile";
            $data['user'] = $this->Profile_model->getUserByEmail($this->session->userdata('email'));
            $this->load->view('guru/template/header', $data);
            $this->load->view('guru/template/sidebar', $data);
            $this->load->view('guru/profile/profile', $data);
            $this->load->view('guru/template/footer');
    } 

    public function editProfile()
    {
        
            $data['title'] = "Edit Profile";
            $data['user'] = $this->Profile_model->getUserByEmail($this->session->userdata('email'));

            $this->load->view('guru/template/header', $data);
            $this->load->view('guru/template/sidebar', $data);
            $this->load->view('guru/profile/editprofile', $data);
            $this->load->view('guru/template/footer');
        
    }

    public function runEdit()
    {
        
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password doesn\'t match!',
                'min_length' => 'Password is too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password1]');

            if ($this->form_validation->run('runEdit') == false) {
                $data['title'] = "Edit Profile";
                $data['notifchat'] = $this->Chat_model->getChatData();
                $data['user'] = $this->Profile_model->getUserByEmail($this->session->userdata('email'));

                $this->load->view('guru/template/header', $data);
                $this->load->view('guru/template/sidebar', $data);
                $this->load->view('guru/profile/editProfile', $data);
                $this->load->view('guru/template/footer');
            } else {
                // Update data in the database
                $data = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                ];
                $this->Profile_model->updateUser($this->session->userdata('email'), $data);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your account has been edited.</div>');
                redirect('guruprofile');
            }
        
            
            
    }
    
}