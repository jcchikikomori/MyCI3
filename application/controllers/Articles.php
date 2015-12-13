<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    public $data;
    public function __construct()
    {
        //Core controller constructor
        parent::__construct();
        // $this->load->helper('url');
        // $this->load->database();
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
        // $data['comments']=$this->blog_model->get_comments();
        $this->load->template('articles/details', $data);
    }

    public function display_comments()
    {
        try {
            $data['query']=$this->blog_model->get_article();
            $data['comments']=$this->blog_model->get_comments();
            if (!($data['comments'])) {
                throw new Exception('no data returned');
            }
            $this->load->template('articles/comments', $data);
        } catch (Exception $e) {
            $this->load->template('welcome_message');
        }

    }
    public function insert_comments()
    {
        $insertinfo=$this->blog_model->insertcomments_article();
        //$data['comments']=$this->blog_model->get_latestcomment();
        $data['comments']=$this->blog_model->get_comments();
        echo $this->load->template('articles/commentdisplay',$data);
    }
    public function displaycomments()
    {
        $data['comments']=$this->blog_model->get_comments();
        echo $this->load->template('articles/commentdisplay',$data);
    }

}
