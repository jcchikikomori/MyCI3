<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Comment System
class Comment extends CI_Controller {

    public $data;
    public function __construct()
    {
        //Core controller constructor
        parent::__construct();
        $this->load->model('blog_model');
    }

	//Create
    public function submit($id)
    {
        if ($_POST) {
            $this->blog_model->insert_comments_article();
            $data['comments']=$this->blog_model->get_comments($id);
            return $this->load->view('articles/display_comments',$data);
        } else {
        	return false;
        }

    }

    /**
     * Displaying Comment
     * @param null $id Which Article ID is commented
     * @return string
     */
    public function display($id = NULL)
    {
        try {
            $data['comments'] = $this->blog_model->get_comments($id);
            return $this->load->view('articles/display_comments',$data);
        } catch (Exception $e) {
            return $e . 'Variable: ' . $id;
        }
    }

}
