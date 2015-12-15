<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    public $data;
    public function __construct()
    {
        //Core controller constructor
        parent::__construct();
        $this->load->model('blog_model');
    }

    public function index($ar_id = NULL)
    {
        $data['query'] = $this->blog_model->get_article();
        $this->load->template('articles/index', $data);
    }

    public function details($ar_id)
    {
        $data['details'] = $this->blog_model->get_article($ar_id);
        $data['comments'] = $this->blog_model->get_comments($ar_id);
        $this->load->template('articles/details', $data);
    }

}
