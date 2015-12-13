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

	//Comment id
	public function id($id)
    {
     $this->load->template('index');
    }

	//Create
    public function submit()
    {
        if ($_POST) {
            $insertinfo=$this->blog_model->insertcomments_article();
            $data['comments']=$this->blog_model->get_comments();
            echo $this->load->template('articles/commentdisplay',$data);
        } else {
        	// false
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
