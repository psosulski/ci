<?php
class Ftpclass extends CI_Controller{

    public function index(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/ftp.html">read</a>';
        $this->load->library('ftp');
        $config['hostname'] = 'ftp.example.com';
        $config['username'] = 'your-username';
        $config['password'] = 'your-password';
        $config['debug']        = TRUE;
        $this->ftp->connect($config);
        $this->ftp->upload('/local/path/to/myfile.html', '/public_html/myfile.html', 'ascii', 0775);
        $list = $this->ftp->list_files('/public_html/');
        $this->ftp->mirror('/path/to/myfolder/', '/public_html/myfolder/');
        $this->ftp->close();
    }
}