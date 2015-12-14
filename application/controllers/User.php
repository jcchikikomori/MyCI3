<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        // login1 was the login form with city background
		$this->load->template('login/login1');
	}	

	public function check(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $response = "";
        // Manipulation Here
        if($username == 'toper'){

            if($password == '123123'){
                $response = 'correct';
            }else{
                $response = 'incorrect';
            }
        }else{
            $response = 'incorrect';
        }
        print_r($response);

    }
}

?>