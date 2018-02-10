<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
    

    /**
     *  ini untuk ambil semua data yang ada di database
     *  fungsi result array akan mendapatkan output class object array 
     */
	public function ambil_semua_data( )
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		// $this->db->like('nama_lengkap',$nama);

		$res = $this->db->get();

		return $res->result_array();
	} 

	/**
	 * ini fungsi menampilkan data berdasarkan id
	 * output  row array akan mendapatkan return class object array tapi hanya 1 row saja
	 */
	
	public function ambil_data_berdasarkan_id($id)
	{
		$this->db->where('mahasiswa_id', $id);
		return $this->db->get('mahasiswa')->row_array();
	}

	/**
	 * fungsi ini untuk membuat pagination
	 * 
	 */
	// public function buat_page()
	// {
	// 	$this->db->select('count(mahasiswa_id) as total');
	// 	$this->db->from('mahasiswa');

	// 	return $this->db->get()->row()->total;
	// }

	/**
	 * ini untuk insert data ke database
	 * argument / parameter yang di function akan kita passing di controller
	 * logika nya adalah insert ke tabel apa ? lalu datanya apa
	 * fungsi insert_id() akan mengembalikan id auto increment
	 * paramter $data = apa saja yang di insert
	 */
	
	public function tambah_data($data) 
	{
		// $data = array(
		// 	"nim" => )
		$this->db->insert('mahasiswa', $data);
		return $this->db->insert_id();
	}

	/**
	 * ini fungsi untuk update data
	 * fungsi parameter akan kita passing ke controller
	 * parameter $data = apa saja yang di update
	 * parameter $kondisi = di update berdasarkan apa, misal berdasarkan id, nanti pas di controller
	 */
	public function update_data($data , $kondisi)
	{
		return $this->db->update('mahasiswa', $data, $kondisi);
	}

	/**
	 * ini fungsi untuk delete
	 * parameter $id adalah kondisi untuk delete berdasarkan id
	 */
	
	public function delete($id)
	{
		$this->db->where('mahasiswa_id', $id);
		$this->db->delete('mahasiswa');
	}

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */