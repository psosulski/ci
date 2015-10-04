<?php
class News_model extends CI_Model{

  //set initializing database on load
  public function __construct(){
    $this->load->database();
  }
  public function get_news($slug = FALSE){
    if($slug === FALSE){
      //fetshes all  array
      $query = $this->db->get('news');
      return $query->result_array();

    }
    //fetches row where
    $query = $this->db->get_where('news',array('slug' => $slug));
    return $query->row_array();
  }
  public function set_news(){
    $this->load->helper('uri');
    //method from helper - replaces white spaces to - + strtolower
    //$this->input-> methods reads data form request
    $slug = url_title($this->input->post('title'),'dash',TRUE);
    $data = array(
      'title'=> $this->input->post('title'),
      'slug' => $slug,
      'text' => $this->input->post('text')
    );
    return $this->db->insert('news',$data);
  }
}
