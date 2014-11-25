<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array(
    'register'=>array(                    //用户注册表单的规则
        array(
            'field'=>'username',
            'label'=>'用户名',
            'rules'=>'trim|required|min_length[5]|max_length[25]|xss_clean|callback_username_exists'
        ),
        array(
            'field'=>'password',
            'label'=>'密码',
            'rules'=>'trim|required|min_length[4]|max_length[25]|matches[passconf]|xss_clean'
        ),
        array(
            'field'=>'address',
            'label'=>'收货地址',
            'rules'=>'trim|required|xss_clean'
        ),
        array(
            'field'=>'phone',
            'label'=>'电话',
            'rules'=>'trim|required|is_natural|min_length[6]|max_length[11]|xss_clean'
        ),
        array(
            'field'=>'email',
            'label'=>'邮箱账号',
            'rules'=>'trim|required|xss_clean|valid_email|callback_email_exists'
        )
    ),
    
    'login'=>array(
        array(
                 'field'=>'username',
                 'label'=>'用户名',
                 'rules'=>'trim|required|xss_clean|callback_username_check'
             ),
             array(
                 'field'=>'password',
                 'label'=>'密码',
                 'rules'=>'trim|required|xss_clean|callback_password_check'
             )

    ),
    
);
