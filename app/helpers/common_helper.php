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
 * Voting status
 */
if (!function_exists('voting_status')) {
    function voting_status($studid)
    {
        $LAVA = &lava_instance();
        $result = $LAVA->db->table('vote')
            ->select('user_id')
            ->where('user_id', $studid)
            ->get();

        if (!empty($result)) {
            return 'Voted';
        } else {
            return 'Not Voted';
        }
    }
}

/**
 * Current vote count per candidate
 */
if (!function_exists('vote_count')) {
    function vote_count($candidate_id)
    {
        $LAVA = &lava_instance();
        $result = $LAVA->db->table('vote')
            ->select_count('candidate_id', 'total_vote')
            ->where('candidate_id', $candidate_id)
            ->get();

        if (!empty($result)) {
            return $result['total_vote'];
        } else {
            return 0;
        }
    }
}

/**
 * Profile picture
 */
if (!function_exists('profile_picture')) {
    function profile_picture($candidate_id)
    {
        if ($candidate_id == '') {
            return '<img src="' . BASE_URL . 'uploads/profile/no-avatar.png" alt="Profile Picture" class="rounded-circle me-2" width="100" height="100">';
        }

        $LAVA = &lava_instance();
        $result = $LAVA->db->table('candidate')
            ->select('picture')
            ->where('id', $candidate_id)
            ->get();

        if (!empty($result)) {
            if ($result['picture'] == '') {
                return '<img src="' . BASE_URL . 'uploads/profile/no-avatar.png" alt="Profile Picture" class="rounded-circle me-2" width="100" height="100">';
            } else {
                return '<img src="' . BASE_URL . 'uploads/profile/' . $result['picture'] . '" alt="Profile Picture" class="rounded-circle me-2" width="100" height="100">';
            }
        } else {
            return '<img src="' . BASE_URL . 'uploads/profile/no-avatar.png" alt="Profile Picture" class="rounded-circle me-2" width="100" height="100">';
        }
    }
}
