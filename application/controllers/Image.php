<?php
class Image extends CI_Controller{
    public function index()
    {
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/image_lib.html">read</a>';
        $config['image_library'] = 'gd2';
        $config['source_image'] = '/path/to/image/mypic.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 75;
        $config['height']       = 50;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();
        $this->image_lib->crop();
        $this->image_lib->rotate();
        $this->image_lib->watermark();
        $this->image_lib->display_erorrs();
    }
}