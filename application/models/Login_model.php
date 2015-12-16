<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct()
    {
      // Call the Model constructor
      parent::__construct();
    }
    
    function login($username, $password)
    {
    	//login db function here
    	if (!isset($username) && !isset($password)) {
    		$error = "Required Fields are empty!";
    		return false;
    	} else {
    		$user_query = $this->db
                  			->select('*')
							->from('users')
                  			->where('user_name', $username)
							->get()
							->row_array();
			  if (!$user_query) {
			  	return false;
			  } else {
			  	/* Encrypting password using sha1 algorithm
	    		 * You may also use md5 if you want
	    		 */
	    		$hash = md5($password);
				if ($hash == $user_query['user_password']) {
				 //preparing array for session
				 $newdata = array(
					   'username'  => $username,
					   'email'     => $user_query['user_email'],
					   'logged_in' => TRUE
							);
							//set session
							$this->session->set_userdata($newdata);
							//within 1200 seconds
							$this->session->mark_as_temp($newdata, 1200);
					return true;
				}
			  }
    	}
    }
    
    function logout($session)
    {
    	//logout using sesssion destroy
    	session_destroy();
    }

}