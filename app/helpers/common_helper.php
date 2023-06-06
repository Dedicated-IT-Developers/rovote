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
 * Student Course
 */
if (!function_exists('course')) {
    function course($CORID)
    {
        $LAVA = &lava_instance();
        $result = $LAVA->db->table('course')
            ->select('CORCODE, CORMAJOR')
            ->where('CORID', $CORID)
            ->get();

        if (!empty($result)) {
            echo $result['CORCODE'] . ' - ' . $result['CORMAJOR'];
        } else {
            echo 'NO COURSE FOUND';
        }
    }
}

/**
 * Student College
 */
if (!function_exists('college')) {
    function college($COLLID)
    {
        $LAVA = &lava_instance();
        $result = $LAVA->db->table('college')
            ->select('COLLCODE')
            ->where('COLLID', $COLLID)
            ->get();

        if (!empty($result)) {
            echo $result['COLLCODE'];
        } else {
            echo 'NO COLLEGE FOUND';
        }
    }
}

/**
 * Year Level
 */
if (!function_exists('year_level')) {
    function year_level($year_level)
    {
        switch ($year_level) {
            case 1:
                echo 'FIRST YEAR';
                break;
            case 2:
                echo 'SECOND YEAR';
                break;
            case 3:
                echo 'THIRD YEAR';
                break;
            case 4:
                echo 'FOURTH YEAR';
                break;
            default:
                echo 'YEAR LEVEL NOT FOUND';
                break;
        }
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
