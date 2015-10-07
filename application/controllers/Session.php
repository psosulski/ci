<?php
class Session extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function whenajax(){
        //use
        session_write_close();
    }
    public function session(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/sessions.html">read</a>';
        $this->session->item;
        $this->session->set_userdata(array());
        $this->session->has_userdata('some_name');
        $this->session->unset_userdata('some_name');
    }
    //will only be available for the next request
    public function flashdata(){
        $this->session->mark_as_flash('item');
        $this->session->set_flashdata('item','value');
        $this->session->flashdata('item');
        $this->session->keep_flashdata('item');

    }
    public function tempdata(){
        // 'item' will be erased after 300 seconds
        $this->session->mark_as_temp(array('item'), 300);
        $this->session->set_tempdata('item', 'value', 300);
        $this->session->tempdata('item');
        $this->session->unset_tempdata('item');
        $this->session->sess_destroy();
    }
}