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
        //register
    }

    public function logout()
    {
        session_destroy();
        redirect($this->config->item('URL'));
    }


}
