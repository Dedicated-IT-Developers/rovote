<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Die and dump readable data
 */
if (!function_exists('dd')) {
    function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}

/**
 * Dump readable data
 */
if (!function_exists('show')) {
    function show($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}


