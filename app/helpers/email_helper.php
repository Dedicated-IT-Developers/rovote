<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');


function verify_email($email, $token, $fname, $lname)
{
    $LAVA = &lava_instance();
    $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/registration_email.html');
    $search = array('{token}', '{link_verify}', '{firstname}', '{lastname}', '{app_name}');
    $replace = array($token, BASE_URL . "access/verify", $fname, $lname, "Rovote");
    $template = str_replace($search, $replace, $template);
    $LAVA->email->recipient($email);
    $LAVA->email->subject('Rovote Email Verification');
    $LAVA->email->sender('myemail@gmail.com');
    $LAVA->email->email_content($template, 'html');
    $LAVA->email->send();
}

function reset_password($name, $email, $token)
{
    $LAVA = &lava_instance();
    $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/reset_password_email.html');
    $search = array('{token}', '{link_reset}', '{name}', '{app_name}');
    $replace = array($token, BASE_URL . "access/new_password/", $name, "Rovote");
    $template = str_replace($search, $replace, $template);
    $LAVA->email->recipient($email);
    $LAVA->email->subject('Rovote Password Reset');
    $LAVA->email->sender('myemail@gmail.com');
    $LAVA->email->email_content($template, 'html');
    $LAVA->email->send();
}
