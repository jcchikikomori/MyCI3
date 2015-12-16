<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

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
        //$this->feedback->set('HELLO! This is from feedback library. I called using session');
        $this->load->template('login/login');
    }

    public function login()
    {
        if ($_POST) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $query = $this->login_model->login($username, $password);
            if ($query == TRUE) {
                redirect($this->config->item('URL'));
                exit;
            } else {
                redirect($this->config->item('URL') . '/user');
                exit;
            }
        }
    }

    public function register()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $email = $this->input->post('email');
        //this columns (e.g: 'user_name') should be exists on the table
        $data = array('user_name'=>$username,'user_password'=>$password,'user_email'=>$email);

        //execute
        try {
            $query = $this->user_model->register($data);
            if ($query == TRUE) {
                $this->feedback->set('Registered, Yay! You may login right now');
                redirect($this->config->item('URL') . '/user');
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $this->feedback->set("There's something wrong here:<hr />" . $e);
            return false;
        }
    }

    public function logout()
    {
        //session_destroy();
        $this->auth->logout();
        redirect($this->config->item('URL'));
    }


}
