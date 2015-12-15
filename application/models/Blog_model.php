<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct()
    {
      // Call the Model constructor
      parent::__construct();
    }

    /**
     * Get Article with or without $id
     * @param null $id
     * @return $result
     */
    public function get_article($id = NULL)
    {
        if (isset($id)) {
            return $this->db
                    ->select('*')
                    ->where('article_id', $id)
                    ->get('blog_articles')
                    ->row_array();
        } else {
            //$sql = "SELECT * FROM blog_articles";
            //$query = $this->db->query($sql);
            //$result = $query->result();
            //return $result;
            return $this->db
                ->select('*')
                ->get('blog_articles')
                ->result();
        }
    }

    public function get_comments($id)
    {
        return $this->db
            ->select('*')
            ->where('cmt_article_id', $id)
            //SAMPLE JOIN
            //->join('blog_articles', 'blog_articles.article_id = blog_comments.cmt_article_id', 'left')
            // Produces: LEFT JOIN blog_articles ON blog_articles.article_id = blog_comments.cmt_article_id
            //->join('users', 'blog_comments.user_id = users.user_id', 'inner')
            ->get('blog_comments')
            ->result();
        /*
        $this->db->select('*');
        $this->db->from('blog_comments');
        $this->db->where('cmt_article_id',$id);
        return $this->db->get();
        */
    }
  
    //insert comments
    public function insert_comments_article()
    {
         $this->load->helper('date');
         $name = $this->input->post('name');
         $email = $this->input->post('email');
         $article_id = $this->input->post('article_id');
         $comment = $this->input->post('comment');
         $date_string = "%Y-%m-%d - %h:%i %a";
         $time = time();
         $date= mdate($date_string, $time);
         return $this->db->insert('blog_comments',array('name'=>$name ,'email'=>$email,'comment'=>$comment,'time'=>$date,'cmt_article_id'=>$article_id));
    }

    public function get_latestcomment()
    {
         $article_id=$this->input->post('article_id');
         $this->db->select('*');
         $this->db->from('blog_comments');
         $this->db->where('cmt_article_id',$article_id);
         $this->db->order_by('comment_id', 'DESC');
         $this->db->limit('1');
         return $this->db->get();
    }

}