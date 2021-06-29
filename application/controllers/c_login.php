<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    //load model
    $this->load->model('m_login');
    }

  function index(){
    $this->load->view('login');
  }
 

    function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
      );
    if($cek = $this->m_login->cek_login("login",$where)->num_rows()){
          if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("siswa"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }else{
    $cek = $this->m_login->cek_login("admin",$where)->num_rows();
  if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("admin"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }

    

  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('C_login'));
  }
 }