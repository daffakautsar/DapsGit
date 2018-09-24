<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('crud');
		$this->load->library('session');
	}
	
	public function index(){
		$datad['buku']=$this->crud->tampilkan();
		$this->load->view('welcome_message.php',$datad);

	}

	public function goregister()
	{
		$this->load->view('register.php');
	}

	public function gologin()
	{
		$this->load->view('login.php');
	}

	public function menujucreate(){
		$this->load->view('create.php');
	}

	public function menujuread(){
		$this->load->view('read.php');
	}

	public function create(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        //$this->form_validation->set_rules('userfile', 'Product Image', 'required');
        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('create');
        }else{
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		//file gagal di upload
        		$this->load->view('create');
        	}else{
        		//file berhasil di upload
        		$gambar=$this->upload->data();
        		$buku=array(
        		'nama'=>set_value('nama'),
        		'deskripsi'=>set_value('deskripsi'),
        		'gambar'=>$gambar['file_name']
        	);
        	$this->crud->tambahdata($buku);
        	redirect('beranda');
        }
    }
	}

	public function edit($id){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if ($this->form_validation->run() == FALSE) {
        	$data['buku'] = $this->crud->find($id);
        	$this->load->view('update', $data);
        }else{
        	// if($FILES['userfile']['nama'] != ''){
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		$data['buku'] = $this->crud->find($id);
        		$this->load->view('update', $data);
        	}else{
        		$gambar=$this->upload->data();
        		$data_product = array(
        		'nama'       =>set_value('nama'),
        		'deskripsi'=>set_value('deskripsi'),
        		'gambar'      =>$gambar['file_name']
        	);
        		$this->crud->editdata($id,$buku);
        		redirect('beranda');
        	}
      
        	$gambar=$this->upload->data();
        	$data_product = array(
        		'nama'       =>set_value('nama'),
        		'deskripsi'  =>set_value('deskripsi'),
        		'gambar'     =>$gambar['file_name']
        	);
        	$this->crud->update($id, $data_product);
        	redirect('beranda');
        }

	}


	public function delete($id){
		$query =$this->crud->deletedata($id);
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}




	public function register()
	{
		$admin=array(
      'username'=>$this->input->post('username'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')));
      print_r($admin);
      $email_check=$this->crud->email_check($admin['email']);
      if ($email_check) {
      	$this->crud->register_user($admin);
      	$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      	redirect('beranda/gologin');
      }else{
      	$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      	redirect('beranda/goregister');
      }
	}


	function masuk(){
		if ($this->crud->logged_id()) {
			redirect('beranda');
		}else{
			$this->form_validation->set_rules('username','E-mail','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
				<div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> Harus diisi</div></div>');
			if ($this->form_validation->run() == TRUE) {
				$email = $this->input->post('username', TRUE);
				$password = MD5($this->input->post('password', TRUE));
				$checking = $this->crud->login('admin',array('email'=>$email),
					array('password'=>$password));
				if ($checking != FALSE) {
					foreach ($checking as $apps) {
						$session_data = array(
							'id'=>$apps->id,
							'username'=>$apps->username,
							'password'=>$apps->password);
						$this->session->set_userdata($session_data);
						redirect('dashboard/');
					}
				}else{
					$data['error']='<div class="alert alert-danger" style="margin-top: 3px">
					<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b>
					Email atau Password salah !</div></div>';

					$this->load->view('login');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda/gologin', 'refresh');
	}

	function aksi_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
  	'username' => $username,
  	'password' => md5($password)
  );
 $cek = $this->crud->cek_login("admin",$where)->num_rows();
 if($cek > 0){

$data_session = array(
  'nama' => $username,
  'status' => "login"
 );

$this->session->set_userdata($data_session);

redirect('dashboard/');

}else{
 $datad['buku']=$this->crud->tampilkan();
		$this->load->view('welcome_message.php',$datad);
}
}
}