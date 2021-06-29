<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('m_siswa');
		//if($this->session->userdata('status') != "login"){
		//redirect(base_url("login"));
   // } 
}


		public function index()

	{
		$data['siswa']= $this->m_siswa->ambildata()->result();
		$this->load->view('templateadmin/header');
		$this->load->view('templateadmin/sidebar');
		$this->load->view('informasiadmin',$data);
		$this->load->view('templateadmin/footer');
		
	}

	//public function hapus($id){
		//$where = array ('id'=> $id);
		//$this->siswa->hapus_data($where,'siswa');
		//redirect('siswa/informasipendaftaran');
	//}




	public function edit($id){
		$where = array('id'=>$id);
		$data['siswa']=$this->m_siswa->edit_data($where,'siswa')->result();
		$this->load->view('templateadmin/header');
		$this->load->view('templateadmin/sidebar');
		$this->load->view('editadmin',$data);
		$this->load->view('templateadmin/footer');

	}
		public function update(){

		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$nilai_mtk = $this->input->post('nilai_mtk');

		$data = array(	
	'status'=>$status,
	'nilai_mtk'=>$nilai_mtk,
		);

		$where = array(
			'id'=> $id
		);
		$this->m_siswa->update_data($where,$data,'siswa');
		redirect('admin/index');
	}
}