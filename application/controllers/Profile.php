<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	private $_title = 'Data Profile';

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tools_helper');
	}

	public function index()
	{
		$data = array(
			'title' => $this->_title
		);

		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function get_user()
	{
		// $url = "api3carmarket.towert.win/user2/get_profile";
		// return true;
	}

	public function post_user()
	{

	}

	public function delete_user()
	{

	}

	public function put_user()
	{

	}

	public function en_decode()
	{
		// if ( is_null($data)) {
		// 	echo json_encode( array("error"=>1, "msg"=>"Data Fail") );
		// 	return false;
		// }

		$data = $this->input->post("params", TRUE);
		$key = "banana";
		$method ="AES-256-ECB";

		if ( is_null($data) ) {
			echo json_encode( array("error"=>1, "msg"=>"is NULL") );
		}

		$result = openssl_decrypt ($data, $method, $key);
		echo $result;
		return true;
	}

}
