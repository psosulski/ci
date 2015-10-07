<?php

class Errors extends CI_Controller{
    public function handling(){
        show_error('message','status_code','heading');
        show_404('page','log_error');

        $level = array('error','debug','info');
        log_message('error','message','error whether logging a native php message');

    }
    public function caching(){
        $this->output->cache('5');
        $this->output->delete_cache('errors/caching');
    }
    public function profiler(){
        $this->output->enable_profiler(TRUE);
        $this->output->enable_profiler(FALSE);

    }
    public function lang(){
        //not "Invalid Selection" ? ?
        $this->lang->line('invalid_selection');


    }
}


//strings
//'My String'
//"My string {$foo}"
//"SELECT foo FROM bar WHERE baz = 'bag'"