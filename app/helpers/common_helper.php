<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');


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