<?php
class Inputclass extends CI_Controller{
    public function index(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/image_lib.html">read</a>';

        echo $this->input->post('something');
        echo $this->input->get('something');
        echo $this->input->cookie('something');
        echo $this->input->server('something');

        $this->input->raw_input_stream;
    }
}