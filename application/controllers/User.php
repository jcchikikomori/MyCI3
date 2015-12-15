<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public $data;
  public function __construct()
  {
    //Core controller constructor
    parent::__construct();
    $this->load->model('login_model'); //for login
    $this->load->model('user_model'); //for user actions including registration
  }

	public function index()
	{
    // login1 was the login form with city background
		$this->load->template('login/login1');
	}
	
	public function login()
	{
		if ($_POST) {
			$username = $this->input->post('username');
    	$password = $this->input->post('password');
      //$response = "";
      
      // Manipulation Here
      if($username == 'toper'){
      	if($password == '123123'){
      	$response = 'correct';
	      } else {
	        $response = 'incorrect'; 
	     	}
     		print_r($response);
			}
		}
	}

	public function register() {
		//register
	}


}
