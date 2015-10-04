<?php
class News extends CI_Controller{

  //load models and helpers
  public function __construct(){
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url_helper');
  }


  public function index(){
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'title';
    //templating
    $this->load->view('templates/header.php',$data);
    $this->load->view('news/index.php',$data);
    $this->load->view('templates/footer.php',$data);
  }

  public function view($slug = NULL){
    $data['news_item'] = $this->news_model->get_news($slug);
  }


  public function create()
  {
      //loads helper s
      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = 'Create a news item';
      //sets the validation rules name, name used in error, type
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('text', 'text', 'required');

      if ($this->form_validation->run() === FALSE)
      {
          $this->load->view('templates/header', $data);
          $this->load->view('news/create');
          $this->load->view('templates/footer');

      }
      else
      {
          $this->news_model->set_news();
          $this->load->view('news/success');
      }
  }




}
