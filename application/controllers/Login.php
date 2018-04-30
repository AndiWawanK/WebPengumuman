<?php

  class Login extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->helper(array('form','url'));
      $this->load->library('form_validation');
      $this->load->model('m_admin');

      if($this->session->userdata('status') == "login"){
        redirect(base_url("gate"));
		  // }else{
      //   redirect(base_url("login"));
      }
    }

    public function index(){
      $this->load->view('login');
    }

    public function login_procces(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->form_validation->set_rules('username', 'password', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run() != FALSE){
        $login = array(
          'username' => $username,
          'password' => md5($password)
        );

        $cek = $this->m_admin->set_login('admin', $login)->num_rows();
          if($cek > 0){
            $data_session = array(
              'nama' => $username,
              'status' => "login",
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('gate'));
          }else{
            $error['notif'] = "Username Dan Password Salah!";
            $this->load->view('login', $error);
          }

      }else{
        redirect('login');
      }
    }


  }
