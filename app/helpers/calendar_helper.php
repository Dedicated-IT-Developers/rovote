<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Other Resources:
 * https://www.w3schools.com/php/php_ref_date.asp
 * https://www.php.net/manual/en/datetime.format.php
 */

/* Date Today ('Y-m-d')
 * get the date today , the default format is Y-m-d H:i:s or you can specify the format you want using the $format parameter
 * For more format options Goto: https://www.php.net/manual/en/datetime.format.php
 */
if (!function_exists('date_today')) {
    function date_today($format = 'Y-m-d H:i:s')
    {
        return date($format);
    }
}

/* Change Format of a Date
 * 
 */
if (!function_exists('change_date_format')) {
    function change_date_format($date, $format = 'l, F j, Y') // default format is l, F j, Y (e.i.: Thu, December 5, 2021)
    {
        if ($date == '')
            return null;
        else
            return date($format, strtotime($date));
    }
}

/* Count Date - count the remaining days from datenow to a specific date
 * 
 */
if (!function_exists('count_date')) {
    function count_date($until)
    {
        $d1 = strtotime($until);
        return ceil(($d1 - time()) / 60 / 60 / 24);
    }
}

/* Add Days,Months,Weeks,or Years
 * 
 */
if (!function_exists('add_date')) {
    function add_date($date, $num = 1, $type = 'days', $format = 'Y-m-d H:i:s') //type = days,months,weeks,years
    {
        $date = date_create($date);
        date_add($date, date_interval_create_from_date_string("$num $type"));
        return date_format($date, $format);
    }
}

/* Subtract Days,Months,Weeks,or Years from specified 
 * 
 */
if (!function_exists('sub_date')) {
    function sub_date($date, $num = 1, $type = 'days', $format = 'Y-m-d H:i:s') //type = days,months,weeks,years
    {
        $date = date_create($date);
        date_sub($date, date_interval_create_from_date_string("$num $type"));
        return date_format($date, $format);
    }
}

/* Substract Days,Months,Weeks,or Years from Current
 * 
 */
if (!function_exists('sub_date_current')) {
    function sub_date_current($num = 1, $type = 'days', $format = 'Y-m-d H:i:s') //type = days,months,weeks,years
    {
        $d = strtotime("-" + $num + " " + $type); // "-2 days"
        return date($format, $d);
    }
}

/**
 * Get last day of the month
 */
if (!function_exists('last_day_of_month')) {
    function last_day_of_month($date, $format = 'Y-m-t')
    {
        $lastDateOfMonth = date($format, strtotime($date));
        return $lastDateOfMonth;
    }
}

/**
 * Last Year
 */
if (!function_exists('last_year')) {
    function last_year($format = 'Y-m-t')
    {
        $d = strtotime("-365 days"); // "-2 days"
        return date($format, $d);
    }
}

/**
 * Time Ago
 */
if (!function_exists('get_time_ago')) {
    function get_time_ago($time)
    {
        $time_difference = time() - strtotime($time);

        if( $time_difference < 1 ) { return 'less than 1 second ago'; }
        $condition = array( 
                    12 * 30 * 24 * 60 * 60  =>  'year',
                    30 * 24 * 60 * 60       =>  'month',
                    24 * 60 * 60            =>  'day',
                    60 * 60                 =>  'hour',
                    60                      =>  'minute',
                    1                       =>  'second'
                );

        foreach( $condition as $secs => $str )
        {
            $d = $time_difference / $secs;

            if( $d >= 1 )
            {
                $t = round( $d );
                return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
            }
        }
    }
}

/**
 * Time Ago
 */
if (!function_exists('posted')) {
    function posted($time)
    {
        $time_difference = time() - strtotime($time);

        if( $time_difference < 1 ) { return 'now'; }
        $condition = array( 
                    12 * 30 * 24 * 60 * 60  =>  'year',
                    30 * 24 * 60 * 60       =>  'month',
                    24 * 60 * 60            =>  'day',
                    60 * 60                 =>  'hour',
                    60                      =>  'minute',
                    1                       =>  'second'
                );

        foreach( $condition as $secs => $str )
        {
            $d = $time_difference / $secs;

            if( $d >= 1 )
            {
                $t = round( $d );
                return $t . $str . ( $t > 1 ? 's' : '' );
            }
        }
    }
}