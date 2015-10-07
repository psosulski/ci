<?php

class Examples extends CI_Controller{

    public function helper_example()
    {
        $this->load->helper(array('url','text'));
        $data = array();
        $this->load->view('helpers/example',$data);
    }
    public function library()
    {
        $this->load->library('form_validation');
        $this->load->library('someclass',$params = array('one','two','three'));
        $this->someclass->some_method();
    }
    public function driver()
    {
        $this->load->driver('some_parent');
        $this->some_parent->child_one->some_method();
        $this->some_parent->child_two->another_method();


    }
    public function core()
    {
        echo '<a href="http://www.codeigniter.com/user_guide/general/core_classes.html">read</a>';

    }
    public function common_functions()
    {
        echo is_php('5.3');
        echo is_really_writable('file.php');
        echo config_item('key');
        echo set_status_header('200','text');
        echo remove_invisible_characters('Java\\0script');
        echo html_escape(array());
        echo get_mimes();
        echo is_https();
        echo is_cli();
        echo function_usable('eval');

    }
    public function password_hashing(){
        echo '<a href="http://www.codeigniter.com/user_guide/general/compatibility_functions.html">read</a>';
        $hash = 'password_hash';

        echo password_hash($hash,PASSWORD_DEFAULT);
        echo password_get_info($hash);
        echo password_needs_rehash($hash,PASSWORD_DEFAULT);
        echo password_verify('password_hash',$hash);
    }

    public function benchmark()
    {
        $this->benchmark->mark('code_start');


        $this->benchmark->mark('code_end');
        $this->benchmark->elapsed_time('code_start','code_end');
        $this->benchmark->elapsed_time();
        $this->benchmark->memory_usage();
    }
    public function languagues()
    {
        $idiom = $this->session->get_userdata('language');
        $this->lang->load('error_messages', $idiom);
        $oops = $this->lang->line('message_key');
    }
    public function loader()
    {

    }
    public function migration()
    {

    }
    public function output()
    {
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/migration.html">read</a>';
    }
    public function pagination()
    {
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/pagination.html">read</a>';
        $this->load->library('pagination');
        $config['base_url'] = 'http://example.com/index.php/test/page/';
        $config['total_rows'] = 200;
        $config['per_page'] = 20;

        $this->pagination->initialize($config);

        echo $this->pagination->create_links();


    }
    public function templateparser(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/parser.html">read</a>';
    }
    public function security(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/security.html">read | XSS | CSRF </a>';

        $this->security->xss_clean('dasdasd');
    }
}