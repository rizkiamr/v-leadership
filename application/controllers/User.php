<?php


    class User extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            // load model User.php
            $this->load->model('user_model');
        }


        // fungsi untuk login user berdasarkan token

        public function login(){
            if($this->session->login_user){
                redirect('user/index');
            }
            

            $data['judul'] = 'Login';
            $this->session->user = $this->input->post('token');
            
            
          
            $token = $this->db->get_where('token' , ['token' => $this->session->user] )->result_array();
            
            
            
            $this->load->view('templates/header' , $data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');
            // cek apakah token sudah pernah digunakan
            if( $token && $token[0]['aktif'] != 1 ){
             
                $this->session->login_user = true;
                $this->user_model->user_active($this->session->user);
                redirect('user/index');

               
                

            }
            else{
                $this->session->set_flashdata('login_salah' , 'token tidak terdaftar atau sudah pernah digunakan' );

            }

        }

        // halaman pemilihan ketua 1
        public function index(){
            
            $data['judul'] = 'Pilih ketua ';
            $data['ketua_1'] = $this->user_model->index();
            if( $this->session->login_user  ){
                
                if( $this->session->pilih_ketua_1 ) {
                    
                    redirect('user/logout');
                    die;
                    
                    
                    
                }

            else{
                $this->load->view('templates/header' , $data);
                $this->load->view('user/index' , $data);
                $this->load->view('templates/footer');
            }
            
            
        }
        else{
            redirect('user/login');
            die;
        }
                
        
        
        
        
        
        
    }

        // public function index_2(){
        //     $data['judul'] = 'pilih ketua 2';
        //     $data['ketua_1'] = $this->user_model->index_2();


        //     if($this->session->login_user){

        //         $this->load->view('templates/header', $data);
        //         $this->load->view('user/index_2', $data);
        //         $this->load->view('templates/footer');
        //     }
            
        //     else{
        //         redirect('user/login');
        //     }
            
        // }
        
        // detail kandidat saat user mengklik tombol pilih
        
        public function detail_ketua_1($id){
    
            $data['ketua_1'] = $this->db->get_where('ketua_1',['id' => $id])->result_array();
            $data['judul'] = 'Pilih kandidat';
            if($this->session->login_user){
                
                if( $this->session->pilih_ketua_1 ) {
                    
                    redirect('user/index_2');
                    die;
                }
                else{
                    $this->load->view('templates/header' , $data );
                    $this->load->view('user/detail_ketua_1' , $data);
                    $this->load->view('templates/footer');
                }
            }
            
            else{
                redirect('user/login');
            }
        }
    
        // public function detail_ketua_2($id){
        //     $data['ketua_1'] = $this->db->get_where('ketua_2',['id' => $id])->result_array();
        //     $data['judul'] = 'pilih kandidat ketua 2';
        //     if($this->session->login_user){
        //         $this->load->view('templates/header' , $data );
        //         $this->load->view('user/detail_ketua_2' , $data);
        //         $this->load->view('templates/footer');
        //     }
    
        //     else{
        //         redirect('user/login');
        //     }
        // }

    // pemrosesan data saat user sudah memilih kandidat
    public function pilih_ketua_1($id){
        $this->user_model->pilih_ketua_1($id);
        $this->session->pilih_ketua_1 = true;
        redirect('user/logout');
        
    }
    
    // public function pilih_ketua_2($id){
    //     $this->user_model->pilih_ketua_2($id);
        
        

    // }

    // method logout
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('user/end');
    }
    
        public function end(){
            $data['judul'] = 'Success';
        
         
                $this->load->view('templates/header', $data);
                $this->load->view('user/sukses');
                $this->load->view('templates/footer');
            

        
        }

        

        // detail kandidat kandidat
        
    }