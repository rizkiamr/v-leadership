<?php


class Admin extends CI_Controller{
        // load the feature in this controllers
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
        }
        
        
        public function index(){
            $data['judul'] = 'Dashboard';
            $data['pemilih'] = $this->admin_model->pemilih();
            $data['sudah_memilih'] = $this->admin_model->sudah_memilih();
            $data['ketua1'] = $this->admin_model->index();
            // $data['ketua2'] = $this->admin_model->ketua_2();

            if( $this->session->login ){
                $this->load->view('templates/header', $data);
                $this->load->view('admin/index' , $data);
                $this->load->view('templates/footer');
            
            }
            else {
                redirect('admin/login');
            }
        }

        // show data live 
        public function showPemilih(){
            $data['pemilih'] = $this->admin_model->pemilih();
            $data['sudah_memilih'] = $this->admin_model->sudah_memilih();

            echo stripslashes(json_encode($data));
        }


        public function login(){
            $data['judul'] = 'Login';
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/login');
            $this->load->view('templates/footer');

            if( $this->input->post('username') == 'ecos' && $this->input->post('password') == 'ecos-esport' ){
                $this->session->login = true;
                redirect('admin/index');
                
            }

            else {
                $this->session->login = false;
                $this->session->set_flashdata('login_admin_salah' , 'username atau password salah');
            }
        }

        // logout

        public function logout(){
            $this->session->sess_destroy();
            redirect('home');
        }

        public function daftar_kandidat(){
            $data['judul'] = 'Daftar kandidat';

            
            $data['ketua_1'] = $this->admin_model->index();
            // $data['ketua_2'] = $this->admin_model->ketua_2();
            

            if ( $this->session->login ){

            $this->load->view('templates/header', $data);
            $this->load->view('admin/daftar_kandidat' , $data);
            $this->load->view('templates/footer');

            }

            else{
                redirect('admin/login');
            }
        }
        
        // fungsi untuk menambah kandidat 
        
        public function tambah_ketua_1(){
            
            
            
            $data['judul'] = 'Tambah kandidat ketua ';
            $data['kandidat'] = $this->admin_model->index();
            
            $this->form_validation->set_rules('nama' , 'Nama' , 'required');
            $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
            $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

            if($this->form_validation->run() == false ){
                // $error = array('error' => $this)
                $this->load->view('templates/header' , $data);
                $this->load->view('admin/tambah_ketua_1', $data);
                $this->load->view('templates/footer' );
            }
            
            else{
                $this->admin_model->tambah_ketua_1();
                $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
                redirect( 'admin/daftar_kandidat');
            }

        }

        // public function tambah_ketua_2(){

        //     $data['judul'] = 'tambah kandidat ketua 2';
        //     $data['kandidat'] = $this->admin_model->index();
            
        //     $this->form_validation->set_rules('nama' , 'Nama' , 'required');
        //     $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
        //     $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');
            
        //     if($this->form_validation->run() == false ){
        //         // $error = array('error' => $this)
        //         $this->load->view('templates/header' , $data);
        //         $this->load->view('admin/tambah_ketua_2', $data);
        //         $this->load->view('templates/footer' );
        //     }
            
        //     else{
        //         $this->admin_model->tambah_ketua_2();
        //         $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
        //         redirect( 'admin/daftar_kandidat');
        //     }

        // }
        // method hapus kandidat
        
        public function hapus_ketua_1($id) {
            $this->admin_model->hapus_ketua_1($id);
            $this->session->set_flashdata('flash' , 'dihapus');
            echo 'berhasil';
            redirect('admin/daftar_kandidat');
            
        }
        
        // public function hapus_ketua_2($id) {
        //     $this->admin_model->hapus_ketua_2($id);
        //     echo 'berhasil';
        //     redirect('admin/daftar_kandidat');
            
        // }
        
        
        
        // edit data
        
    public function edit_ketua_1($id){
        $data['judul'] = 'Edit kandidat 1';
        $data['kandidat'] = $this->db->get_where(  'ketua_1' , ['id' => $id])->result_array();
        
        $this->form_validation->set_rules('nama' , 'Nama' , 'required');
        $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
        $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');
        
        if($this->form_validation->run() == false ){
            // $error = array('error' => $this)
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/edit_ketua_1', $data);
            $this->load->view('templates/footer' );
        }

        else{
            $this->admin_model->edit_ketua_1($id);
            $this->session->set_flashdata('flash' , 'berhasil diubah');
            redirect( 'admin/daftar_kandidat');
        }
    }
    
    
    // method edit ketua 
    
    
    // public function edit_ketua_2($id){
    //     $data['judul'] = 'edit kandidat 2';
    //     $data['kandidat'] = $this->db->get_where(  'ketua_2' , ['id' => $id])->result_array();
        
    //     $this->form_validation->set_rules('nama' , 'Nama' , 'required');
    //     $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
    //     $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');
        
    //     if($this->form_validation->run() == false ){
    //         // $error = array('error' => $this)
    //         $this->load->view('templates/header' , $data);
    //         $this->load->view('admin/edit_ketua_1', $data);
    //         $this->load->view('templates/footer' );
    //     }
        
    //     else{
    //         $this->admin_model->edit_ketua_2($id);
    //         $this->session->set_flashdata('flash' , 'berhasil diubah');
    //         redirect( 'admin/daftar_kandidat');
    //     }
    // }
    
//  method untuk halaman lihat hasil
    public function lihat_hasil(){
        $data['judul'] = 'Lihat hasil';

        if( $this->session->login){
        $data['ketua_1'] = $this->admin_model->index();


        // $data['ketua_2'] = $this->admin_model->ketua_2();
        
        $this->load->view('templates/header' , $data);
        $this->load->view('admin/lihat_hasil' , $data);
        $this->load->view('templates/footer' );
     
        }

        else{
            redirect('admin/login');
        }
    }

    // untuk json dari data lihat hasil
    public function showHasil(){
        $data['ketua_1'] = $this->admin_model->index();
        echo json_encode($data['ketua_1']);
    }


    // detail kandidat pada halaman lihat hasil
    
    
    public function detail_kandidat_1($id){
        $data['judul'] = 'detail kandidat';
        $data['ketua_1'] = $this->db->get_where('ketua_1' , ['id' => $id])->result_array();
        $this->load->view('templates/header' , $data);
        $this->load->view('admin/detail_kandidat_1', $data);
        $this->load->view('templates/footer' );
    }
    
    // public function detail_kandidat_2($id){
    //     $data['judul'] = 'detail kandidat';
    //     $data['ketua_2'] = $this->db->get_where('ketua_2' , ['id' => $id])->result_array();
    //     $this->load->view('templates/header' , $data);
    //     $this->load->view('admin/detail_kandidat_2', $data);
    //     $this->load->view('templates/footer' );
    // }

       
    }