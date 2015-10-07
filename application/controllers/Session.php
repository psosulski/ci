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
        $this->session->item;
        $this->session->set_userdata(array());
        $this->session->has_userdata('some_name');
        $this->session->unset_userdata('some_name');
    }
}