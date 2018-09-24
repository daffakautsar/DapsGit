<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

// Read
	public function tampilkan(){
		$query=$this->db->get('buku');
		return $query->result();
	}

	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('buku');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

// Create
	public function tambahdata($buku){
		return $this->db->insert('buku',$buku); // memasukan data ke tabel siswa dengan parameter $siswa
	}

// update
// fungsi untuk mengedit data siswa berdasarkan ID yang ada pada tabel
	public function editdata($id,$buku){
		$this->db->where('id',$id)
		         ->update('buku',$buku);
	}
// untuk mengambil id atau mendefinisikan data mana yang akan diedit
	public function getuser($id){
		$query= $this->db->get_where('buku',array('id' => $id ));
		return $query->row_array();
	}

// delete
	public function deletedata($id){
		$this->db->where('buku.id',$id);
		return $this->db->delete('buku');
	}


	public function register_user($admin)
	{
		$this->db->insert('admin', $admin);
	}

	public function login($email,$pass)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		$this->db->limit(1);
		$query=$this->db->get();
		if($query->num_rows() == 0)
		{
			return false;
		}else{
			return $query->result();
		}
	}

	public function email_check($email){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}
	}
	function cek_login($table,$where){ 
		return $this->db->get_where($table,$where);
	}
}
?>