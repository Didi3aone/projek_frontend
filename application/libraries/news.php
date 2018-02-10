<?php if( !defined('BASEPATH') ) exit ('No direct script allowed');

class News
{
	function __construct()
	{
	   $this->CI =& ge_instance();
	   $auth = $this->CI->config->item('auth');

	   $this->CI->load->helper('cookie');
	   $this->CI->load->model('User_model');

	   $this->User_model = =& $this->CI->User_model;	
	}

	/*
	 * Cek login user
	 */
	
	function login( $username, $password )
	{
		$logged = $this->User_model->get_login($username);

		if ( $logged ) //REsult FOund
		{
			$password = md5($password);
			if ( $password === $logged->password )
			{
				//start session
			    $this->CI->session->set_userdata('user_id',$logged->id );
			    return TRUE;
			}
		}
		return FALSE;
	}

	/*
	 * Cek apakah sudah login
	 */
	
	function is_login()
	{
		return (($this->CI->session->userdata('user_id')) ? TRUE : FALSE );
	}
    
    /*
     * logout
     */
    
    function logout()
    {
    	$this->CI->session->unset_userdata('user_id');
    }
}