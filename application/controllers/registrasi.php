<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_Register');
		//if($this->session->userdata('status') != "login"){
		//redirect(base_url("login"));
   // } 
}


		public function index()

	{
		

		$this->load->view('registrasi');
	
		
	}
	public function fungsitambah(){
		
		$username = $this->input->post('username');
		$password = $this ->input ->post ('password');


		$data = array(
			
			'username'=>$username,
			'password'=>$password
		
		);
		$this->M_Register->input($data,'login');
		redirect(base_url('c_login/index'));
	}


}