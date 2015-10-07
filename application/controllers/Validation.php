<?php

class Validation extends CI_Controller{
    public function index(){
        echo '<a href="http://www.codeigniter.com/user_guide/libraries/form_validation.html">read</a>';

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|min_length[5]|max_length[12]|is_unique[users.username]'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        $this->form_validation->set_rules('username', 'Username', 'callback_username_check');

        $this->form_validation->set_rules($config);

        $this->form_validation->set_message('rule', 'Error Message');

        $this->form_validation->set_rules('field_name', 'Field Label', 'rule1|rule2|rule3',
            array('rule2' => 'Error Message on rule2 for this field_name')
        );
        $this->form_validation->set_message('min_length', '{field} must have at least {param} characters.');


        //VALIDATING OTHER THAN POST
        $data = array(
            'username' => 'johndoe',
            'password' => 'mypassword',
            'passconf' => 'mypassword'
        );

        $this->form_validation->set_data($data);

        //END

        //lang !!
        $this->form_validation->set_rules('first_name', 'lang:first_name', 'required');
        //then in lang file
        $lang['first_name'] = 'First Name';
        //END

        //important
        reset_validation();
        //END

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('validation/myform');
        }
        else
        {
            $this->load->view('validation/formsuccess');
        }
    }
    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}