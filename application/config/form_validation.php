<?php




$config = array(
    array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required'
    ),
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required'
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

$config['error_prefix'] = '<div class="error_prefix">';
$config['error_suffix'] = '</div>';



//SET OF RULES EXAMPLE

$config = array(
    'signup' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
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
    ),
    'email' => array(
        array(
            'field' => 'emailaddress',
            'label' => 'EmailAddress',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|alpha'
        ),
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ),
        array(
            'field' => 'message',
            'label' => 'MessageBody',
            'rules' => 'required'
        )
    )
);

//THEN

//$this->form_validation->run('signup')

//more automatic make $config = array( 'controller/action' => array())

//OR name controller method signup()