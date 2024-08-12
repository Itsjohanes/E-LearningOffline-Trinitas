<?php

class Pertemuan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pertemuan_model'); 
        $this->load->model('Quiz_model');
        $this->load->library('user_agent');
        $this->load->model('Materi_model');

        checkRole(0);

    }
    
    public function tp($id = ''){
        $data['title'] = "Tujuan Pembelajaran";
        $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
        $data['id'] = $id;
        $status = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array(); 
        $data['tp'] = $status;
        $id_siswa = $this->session->userdata('id');
        $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
        if($id_pertemuan){
            if($status['aktif'] == 1){
                
                        $this->load->view('siswa/template/header', $data);
                        $this->load->view('siswa/template/sidebar', $data);
                        $this->load->view('siswa/pertemuan/tujuanpembelajaran', $data);
                        $this->load->view('siswa/template/footer');
                    
                }else{
                   $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan belum aktif</div>');

                    redirect('materi');
                }
            
    }else{
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan tidak ada</div>');
        redirect('materi');
    }
        
    }
    

    public function index($id = '') {
            //Query semua id_materi pada tb_pertemuan jika $id terdaftar
            $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
            if($id_pertemuan){
                $data['title'] = "Pertemuan";
                $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
                $data['pertemuan'] = $id;
                //query status dari tb_pertemuan
                $status = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array();
                $data['tp'] = $status;
                
                $id_siswa = $this->session->userdata('id');
                if($status['aktif'] == 1){
                    
                            $this->load->view('siswa/template/header', $data);
                            $this->load->view('siswa/template/sidebar', $data);
                            $this->load->view('siswa/pertemuan/menu', $data);
                            $this->load->view('siswa/template/footer');
                       
                    }else{
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan Tidak Aktif</div>');

                        redirect('materi');
                    }
                    
                } else {
                    //tampilkan tulisan belum diaktifasi
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan Tidak Ada</div>');
                    redirect('materi');
                }  
    }
    
    public function form($id = '') {
            //Query semua id_materi pada tb_pertemuan jika $id terdaftar
            $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
            if($id_pertemuan){
                $data['title'] = "Pengumpulan Tugas";
                $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
                $data['hasiltugas'] = $this->db->get_where('tb_hasiltugas', ['id_pertemuan' => $id, 'id_siswa' => $this->session->userdata('id')])->row_array();
                $data['banyakHasilTugas'] =   $this->db->get_where('tb_hasiltugas', ['id_pertemuan' => $id, 'id_siswa' => $this->session->userdata('id')])->num_rows();
                $data['tugas']  = $this->db->get_where('tb_tugas', ['id_pertemuan' => $id])->row_array();
                $data['pertemuan'] = $id;
                //query status dari tb_pertemuan
                $status = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array();
                $data['tp'] = $status;
                $id_siswa = $this->session->userdata('id');
                if($status['aktif'] == 1){
                            $this->load->view('siswa/template/header', $data);
                            $this->load->view('siswa/template/sidebar', $data);
                            $this->load->view('siswa/pertemuan/form', $data);
                            $this->load->view('siswa/template/footer');
                        
                    }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan belum aktif</div>');
                    redirect('materi');                    }
                } else {
                    //tampilkan tulisan belum diaktifasi
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan tidak ada</div>');
                    redirect('materi');
                }

           
            
        

       
    }

  
     public function materiPertemuan($id = ''){

            $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
            if($id_pertemuan){
                $data['title'] = "Materi Pertemuan ". $id;
                $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
                $data['materi'] = $this->db->get_where('tb_materi', ['id_pertemuan' => $id])->result_array();
                $status = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array(); 
                $data['pertemuan']  = $id;
                $id_siswa = $this->session->userdata('id');
                if($status['aktif'] == 1){
                            $this->load->view('siswa/template/header', $data);
                            $this->load->view('siswa/template/sidebar', $data);
                            $this->load->view('siswa/pertemuan/materipertemuan', $data);
                            $this->load->view('siswa/template/footer');
                        }else{
                            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan belum aktif</div>');
                            redirect('pertemuan/materi/');
                        }
                    }else{
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan tidak ada</div>');
                        redirect('pertemuan/materi/');
                    }
               
           
          
         
    }

    public function tugas($id = ''){

            $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
            if($id_pertemuan){
                $data['title'] = "Tugas Pertemuan ". $id;
                $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
                $data['tugas'] = $this->db->get_where('tb_tugas', ['id_pertemuan' => $id])->result_array();
                $status = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array(); 
                $id_siswa = $this->session->userdata('id');
                $data['pertemuan'] = $id;
                if($status['aktif'] == '1'){


                    

                    
                        $this->load->view('siswa/template/header', $data);
                        $this->load->view('siswa/template/sidebar', $data);
                        $this->load->view('siswa/pertemuan/tugas', $data);
                        $this->load->view('siswa/template/footer');

                    }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan belum aktif</div>');
                                            redirect('materi');

                }

                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan tidak ada </div>');
                    redirect('materi');
                }    
            
          
         
    }

   
            public function tambahTugas() {
            $id_siswa = $this->session->userdata('id');
            $pertemuan = $this->input->post('pertemuan');
            $text = $this->input->post('text');
            $upload = $_FILES['upload']['name'];

            if ($upload) {
                $config['encrypt_name'] = TRUE;
                $config['upload_path'] = './assets/tugassiswa/';
                $config['allowed_types'] = 'pdf|docx|doc'; // Izinkan file PDF, DOCX, dan DOC
                $config['max_size'] = 32000; // Maksimal ukuran file 2MB

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('upload')) {
                    $new_upload = $this->upload->data('file_name');

                    $data = [
                        'id_siswa' => $id_siswa,
                        'id_pertemuan' => $pertemuan,
                        'text' => $text,
                        'upload' => $new_upload,
                        'created_at' => date('Y-m-d H:i:s')
                    ];

                    // Simpan tugas ke database
                    $this->Pertemuan_model->insertHasilTugas($data);

                    // Set flashdata untuk pesan sukses
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil diupload</div>');
                } else {
                    // Set flashdata untuk pesan gagal
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tugas gagal diupload: ' . $error . '</div>');
                }
            } else {
                // Set flashdata jika tidak ada file yang diupload
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Tidak ada file yang diupload</div>');
            }

            // Redirect kembali ke halaman sebelumnya
            redirect($this->agent->referrer());
        }


    public function hapusTugas($id = '') {
            //cek apakah id_usernya sama dengan id_pemilik tugas
            $id_siswa = $this->session->userdata('id');
            $id_hasiltugas = $this->Pertemuan_model->getHasilTugasById($id);
            $id_user = $id_hasiltugas['id_siswa'];
            if ($id_siswa != $id_user) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Tidak Dapat Menghapus Tugas Milik Orang Lain!</div>');
                redirect('siswa');
            }else{
                $file = $this->Pertemuan_model->getHasilTugasById($id);
                $filename = $file['upload'];
                //cek kolom nilai pada tb_hasiltugas sudah ada isi
                $hasiltugas = $this->Pertemuan_model->getHasilTugasById($id);
                $nilai = $hasiltugas['nilai'];
                var_dump($nilai);
                if ($nilai != null) {
                    //jika sudah ada nilai
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tugas sudah dinilai</div>');
                    redirect($this->agent->referrer());
                }else{
                    $this->Pertemuan_model->deleteHasilTugas($id);
                    //unlink file based on id_hasiltugas
                    unlink(FCPATH . 'assets/tugassiswa/' . $filename);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil dihapus</div>');
                    redirect($this->agent->referrer());
                }

            }
    }

    public function editTugas() {
    $id = $this->input->post('id_hasiltugas');
    $pertemuan = $this->input->post('pertemuan');
    $filelama = $this->input->post('filelama');
    $text = $this->input->post('text');
    $upload = $_FILES['upload']['name'];

    // Data awal yang akan diperbarui
    $data = [
        'id_pertemuan' => $pertemuan,
        'text' => $text,
        'updated_at' => date('Y-m-d H:i:s')
    ];

    if ($upload) {
        // Konfigurasi upload file baru
        $config['encrypt_name'] = TRUE;
        $config['upload_path'] = './assets/tugassiswa/';
        $config['allowed_types'] = 'pdf|docx|doc'; // Hanya izinkan file PDF, DOCX, dan DOC
        $config['max_size'] = 32000; // Maksimal ukuran file 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('upload')) {
            // Hapus file lama jika ada dan berbeda dengan file baru
            if ($filelama && file_exists(FCPATH . 'assets/tugassiswa/' . $filelama)) {
                unlink(FCPATH . 'assets/tugassiswa/' . $filelama);
            }

            // Set nama file baru
            $new_upload = $this->upload->data('file_name');
            $data['upload'] = $new_upload;
        } else {
            // Jika upload gagal, tampilkan error
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tugas gagal diubah: ' . $this->upload->display_errors() . '</div>');
            redirect($this->agent->referrer());
            return;
        }
    } else {
        // Jika tidak ada file baru yang diupload, tetap gunakan file lama
        $data['upload'] = $filelama;
    }

    // Update tugas ke database
    $this->Pertemuan_model->updateHasilTugas($id, $data);

    // Set flashdata untuk pesan sukses
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas berhasil diubah</div>');

    // Redirect kembali ke halaman sebelumnya
    redirect($this->agent->referrer());
}

    
    public function Quiz($id = ''){
            $data['title'] = "Quiz";
            $data['user'] = $this->db->get_where('tb_akun', ['email' => $this->session->userdata('email')])->row_array();
            $data['soal'] = $this->Quiz_model->getQuizQuestions($id);
            $data['jumlah'] = $this->Quiz_model->getQuizQuestionCount($id);
            $data['pertemuan'] = $this->db->get_where('tb_pertemuan', ['id_pertemuan' => $id])->row_array(); 
            $id_pertemuan = $this->Pertemuan_model->getPertemuanById($id);
            $data['id_pertemuan'] = $id;
            if($id_pertemuan){
            if($data['pertemuan']['aktif'] == '1'){
                $id_siswa = $this->session->userdata('id');
                $hasiltugas =  $this->db->get_where('tb_hasiltugas', ['id_pertemuan' => $id, 'id_siswa' => $this->session->userdata('id')])->num_rows();
                $data['quiz'] = $this->Quiz_model->getQuizCountBySiswaId($this->session->userdata('id'),$id);
                if ($data['quiz'] > 0) {
                                $data['nilai'] = $this->Quiz_model->getNilai($id,$this->session->userdata('id'));
                                $data['jawaban'] = $this->Quiz_model->getQuizAnswers($id, $this->session->userdata('id'));
                                $this->load->view('siswa/template/header', $data);
                                $this->load->view('siswa/template/sidebar', $data);
                                $this->load->view('siswa/pertemuan/pembahasanquiz', $data);
                                $this->load->view('siswa/template/footer');
                            }else{
                                //jika $data['soal'] != null
                                if($data['soal']){
                                     $this->load->view('siswa/template/header', $data);
                                    $this->load->view('siswa/template/sidebar', $data);
                                    $this->load->view('siswa/pertemuan/quiz', $data);
                                    $this->load->view('siswa/template/footer');

                                }else{
                                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Soal Quiz belum ada</div>');
                                    redirect('materi');
                                }
                                
                               
                            }        
                           
                    
                         } else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan belum aktif</div>');
                redirect('materi');

            }
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Pertemuan tidak ada</div>');
                redirect('materi');
            }
        

    }

    public function simpanQuiz()
    {
            $pilihan = $this->input->post('pilihan');
            $id_quiz = $this->input->post('id_quiz');
            $jumlah = $this->input->post('jumlah');
            $id_pertemuan  = $this->input->post('id_pertemuan');
            $score = 0;
            $benar = 0;
            $salah = 0;
            $kosong = 0;
            $str_jawaban = "";

            for ($i = 0; $i < $jumlah; $i++) {
                $nomor = $id_quiz[$i];

                if (empty($pilihan[$nomor])) {
                    $kosong++;
                    $str_jawaban = $str_jawaban . "X";
                } else {
                    $jawaban = $pilihan[$nomor];
                    $str_jawaban = $str_jawaban . $pilihan[$nomor];
                    $isAnswerCorrect = $this->Quiz_model->checkAnswer($nomor, $jawaban,$id_pertemuan);
                    if ($isAnswerCorrect) {
                        $benar++;
                    } else {
                        $salah++;
                    }
                }
            }
           

            $jumlah_soal = $this->Quiz_model->getQuizQuestionCount($id_pertemuan);
            $score = 100 / $jumlah_soal * $benar;
            $hasil = number_format($score, 2);

            $id = $this->session->userdata('id');
            //buat timestamp
            $data = [
                'id_siswa' => $id,
                'jawaban' => $str_jawaban,
                'id_pertemuan' => $id_pertemuan,
                'benar' => $benar,
                'salah' => $salah,
                'kosong' => $kosong,
                'nilai' => $hasil,

                'timestamp' => date('Y-m-d H:i:s')
            ];

            $this->Quiz_model->saveQuizResult($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda sudah pernah mengerjakan Quiz</div>');
            redirect($this->agent->referrer());
        
    }
  
}

   

