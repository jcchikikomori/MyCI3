<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index()
    {
        $this->load->view('hello');
    }

    public function ignored()
    {
        $this->load->view('ignored');
    }

    public function crush($q = NULL)
    {
        switch ($q) {
            case 'boy':
                $this->load->view('crush/' . $q);
                break;
            case 'girl':
                $this->load->view('crush/' . $q);
                break;
            default:
                $this->load->view('crush/error');
        }
    }
}
