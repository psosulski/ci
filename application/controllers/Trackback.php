<?php
class Trackback extends CI_Controller{
    public function index()
    {
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/trackback.html">read</a>';
        $this->load->library('trackback');
        $tb_data = array(
            'ping_url'  => 'http://example.com/trackback/456', //ping_url - The URL of the site you are sending the Trackback to. You can send Trackbacks to multiple URLs by separating each URL with a comma.
            'url'       => 'http://www.my-example.com/blog/entry/123', //url - The URL to YOUR site where the weblog entry can be seen.
            'title'     => 'The Title of My Entry', //title - The title of your weblog entry.
            'excerpt'   => 'The entry content.', //excerpt - The content of your weblog entry.
            'blog_name' => 'My Blog Name', //blog_name - The name of your weblog.
            'charset'   => 'utf-8' //charset - The character encoding your weblog is written in. If omitted, UTF-8 will be used.
        );

        if ( ! $this->trackback->send($tb_data))
        {
            echo $this->trackback->display_errors();
        }
        else
        {
            echo 'Trackback was sent!';
        }

        $this->trackback->display_errors();
    }
}