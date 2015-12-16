<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
      // Call the Model constructor
      parent::__construct();
    }
    
    function login($username, $password)
    {
    	//login db function here
    	if (!isset($username) && !isset($password)) {
    		return false;
    	} else {
    		//fetch user from database
    		$user_query = $this->db
                  			->select('*')
                  			->where('username', $username)
			                 	->get('users')
			                 	->row_array();
			  //checking query
			  if ($user_query != 1) {
			  	return false;
			  } else {
			  	/* Encrypting password using sha1 or md5 algorithm */
	    		$hash = md5($password);
	    		/*
	    		$password_query = $this->db
	                  					->select('*')
	                  					->where('user_password', $hash)
					                 		->get('users')
					                 		->result();
					*/
	        if ($hash == $user_query['user_password']) {
	        	
	        	return true;
	        }
			  }
    	}
    }
    
    function register($array_data)
    {
		$query = $this->db->insert('users', $array_data);
		if ($query) {
			return true;
		} else {
			return false;
		}
    }

}