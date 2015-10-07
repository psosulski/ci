<?php

class Blog extends CI_Controller{
//    public function __construct(){
//        parent::__construct();
//        $this->load->model('blog');
//
//        $this->blog->method();
//
//        $this->load->model('blog','another_object');
//
//        $this->another_object->method();
//    }
    public function blog_disp(){
        //models doesnt connect automatically to db pass TRUE OR CONFIG ARRAY as 3rd param
        $this->load->model('blog','',TRUE);
        $data['query'] = $this->blog->get_last_ten_entries();
        $this->load->view('blog',$data);
    }


}