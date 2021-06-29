<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('m_siswa');
		if($this->session->userdata('status') != "login"){
		redirect(base_url("login"));
   } 
}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('Pendaftaransiswa');
		$this->load->view('template/footer');
		
	}

		public function informasipendaftaran()

	{
		$data['siswa']= $this->m_siswa->ambildata()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('informasipendaftaran',$data);
		$this->load->view('template/footer');
		
	}

	//public function hapus($id){
		//$where = array ('id'=> $id);
		//$this->siswa->hapus_data($where,'siswa');
		//redirect('siswa/informasipendaftaran');
	//}


		public function fungsitambah(){
		
		$nama_siswa = $this->input->post('nama_siswa');
		$nisn = $this ->input ->post ('nisn');
		$jenis_kelamin = $this ->input ->post ('jenis_kelamin');
		$ttl = $this ->input ->post ('ttl');
		$asal_sekolah = $this ->input ->post ('asal_sekolah');

		$data = array(
			
			'nama_siswa'=>$nama_siswa,
			'nisn'=>$nisn,
			'jenis_kelamin'=>$jenis_kelamin,
			'ttl'=>$ttl,
			'asal_sekolah'=>$asal_sekolah	
		);
		$this->m_siswa->input($data,'siswa');
		redirect(base_url('siswa/index'));
	}

	public function edit($id){
		$where = array('id'=>$id);
		$data['siswa']=$this->m_siswa->edit_data($where,'siswa')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit',$data);

	}
		public function update(){

		$id = $this->input->post('id');
		$nama_siswa = $this->input->post('nama_siswa');
		$nisn = $this ->input ->post ('nisn');
		$jenis_kelamin = $this ->input ->post ('jenis_kelamin');
		$ttl = $this ->input ->post ('ttl');
		$asal_sekolah = $this ->input ->post ('asal_sekolah');
		$data = array(
			
			'nama_siswa'=>$nama_siswa,
			'nisn'=>$nisn,
			'jenis_kelamin'=>$jenis_kelamin,
			'ttl'=>$ttl,
			'asal_sekolah'=>$asal_sekolah
		);
		$where = array(
			'id'=> $id

		);
		$this->m_siswa->update_data($where,$data,'siswa');
		redirect('siswa/informasipendaftaran');
	}
}