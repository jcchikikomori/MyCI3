<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->template('ex');
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