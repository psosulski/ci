<?php

class Classess extends CI_Controller{
    public function calendar(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/calendar.html">read</a>';
        $prefs = array(
            'start_day'    => 'saturday',
            'month_type'   => 'long',
            'day_type'     => 'short'
        );

        $this->load->library('calendar', $prefs);
        echo $this->calendar->generate(2006,6);
        $data = array(
            3  => 'http://example.com/news/article/2006/03/',
            7  => 'http://example.com/news/article/2006/07/',
            13 => 'http://example.com/news/article/2006/13/',
            26 => 'http://example.com/news/article/2006/26/'
        );

        echo $this->calendar->generate(2006, 6, $data);
    }
    //deprecated
    public function cart()
    {

    }
    public function config(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/config.html">read</a>';
        //custom config
        $this->config->load('filename');
        $this->config->item('language');
        $this->config->set_item('');
    }
    public function email(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/email.html">read</a>';

        $this->load->library('email');
        $this->email->from('','Name');
        $this->email->to('');
        $this->email->cc('anothermail');
        $this->email->bcc('anothermail');
        $this->email->subject('email');
        $this->email->message('mess');
        $this->email->send();


        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
    }
    public function encryption(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/encryption.html">read</a>';
        $this->load->library('encryption');
        // $key will be assigned a 16-byte (128-bit) random key
        $key = $this->encryption->create_key(16);
        echo 'key: '.$key;
        echo 'bin2hex() '.bin2hex($key);
    }

}