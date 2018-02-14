<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	private $_title = 'Data Profile';
	private $_en_decode = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tools_helper');
	}

	public function index()
	{
        //inisial
        $result = array();

		//url api
		$url = 'http://api3carmarket.towert.win/user2/get_profile';
        //send parameter token
		$postdata = http_build_query(
		    array(
		        'token' => '351UlmMJqiy2oFOiK9ye4HyTzbx1JRlc'
		    )
		);
		//send method
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);
		//convert text
		$context = stream_context_create($opts);
        
		$result = file_get_contents($url, false, $context);
		//decode data json
		$response = json_decode($result);
        //first decrypt data
        $key = "banana";
		$method ="AES-256-ECB";
		$result = openssl_decrypt($response->response, $method, $key);
		$result = json_decode($result);
		//passing parameter to view output
		$data = array(
            "params" => $result
		);

		$this->load->view('header');
		$this->load->view('index', $data);
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

	private function _en_decode()
	{
		$data = $this->input->post("params", TRUE);
		$key = "banana";
		$method ="AES-256-ECB";

		if ( is_null($data) ) {
			echo json_encode( array("error"=>1, "msg"=>"is NULL") );
		}

		$result = openssl_decrypt ($data, $method, $key);
		//echo json_encode( array("error"=>0, "msg"=> json_decode($result)) );
		echo ($result);
		return true;
	}

}
