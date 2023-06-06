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

/**
 * 
 */
if (!function_exists('privacy')) {
    function privacy($val)
    {
        $status = '';
        switch ($val) {
            case 0:
                $status = 'Private';
                break;
            case 1:
                $status = 'Public';
                break;
        }
        return $status;
    }
}
