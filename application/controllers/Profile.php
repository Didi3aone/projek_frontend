<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	private $_title = 'Data Profile';

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

	public function en_decode($data = null)
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
