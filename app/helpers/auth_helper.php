<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Check if user is logged in
 */
if (!function_exists('is_logged_in')) {
    //check if user is logged in
    function is_logged_in()
    {
        $LAVA = &lava_instance();
        if ($LAVA->session->userdata('logged_in') == 1)
            return true;
    }
}

/**
 * 
 */
if (!function_exists('user_type')) {
    function user_type()
    {
        $LAVA = &lava_instance();
        if ($LAVA->session->userdata('user_type') == "admin")
            redirect('admin');
        elseif ($LAVA->session->userdata('user_type') == "student")
            redirect('home');
        elseif ($LAVA->session->userdata('user_type') == "staff")
            redirect('dashboard');
        else
            redirect('auth/logout');
    }
}


/**
 * 
 */
// if (!function_exists('admin_staff')) {
//     function admin_staff()
//     {
//         $LAVA = &lava_instance();
//         if ($LAVA->session->userdata('user_type') != "admin" && $LAVA->session->userdata('user_type') != "staff")
//             user_type();
//     }
// }

/**
 * 
 */
if (!function_exists('admin')) {
    function admin()
    {
        $LAVA = &lava_instance();
        if ($LAVA->session->userdata('user_type') != "admin")
            user_type();
    }
}

/**
 * 
 */
if (!function_exists('staff')) {
    function staff()
    {
        $LAVA = &lava_instance();
        if ($LAVA->session->userdata('user_type') != "staff")
            user_type();
    }
}

/**
 * 
 */
if (!function_exists('student')) {
    function student()
    {
        $LAVA = &lava_instance();
        if ($LAVA->session->userdata('user_type') != "student")
            user_type();
    }
}
