<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetApi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library( array('session','encrypt') );
	}

	public function get_user()
	{
		$key = $this->input->post('token');
		if(!$key) {
			echo json_encode( array("error"=>1, "msg"=>"Data Fail") );
		}


		$url = "api3carmarket.towert.win/user2/get_profile";
		return true;
	
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
		if ( is_null($data)) {
			echo json_encode( array("error"=>1, "msg"=>"Data Fail") );
			return false;
		}

		$data = $this->input->post("params", TRUE);
		$key = "banana";
		$method ="AES-256-ECB";

		$result = openssl_decrypt ($data, $method, $key);
		echo json_encode( array("error"=>0, "msg"=>$result) );
		return true;
	}



}

/* End of file GetApi.php */
/* Location: ./application/controllers/GetApi.php */