<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * DP
 */
if (!function_exists('user_avatar')) {
    function user_avatar($user_id = null)
    {
        $LAVA = &lava_instance();

        if ($user_id == null)
            $user_id = $LAVA->session->userdata('user_id');
        else
            $user_id = encryptor('decrypt', $user_id);

        return $LAVA->db->table('user')
            ->select('photo')
            ->where('id', $user_id)
            ->get()['photo'];
    }
}

/**
 * COVER
 */
if (!function_exists('user_cover')) {
    function user_cover($user_id = null)
    {
        $LAVA = &lava_instance();

        if ($user_id == null)
            $user_id = $LAVA->session->userdata('user_id');
        else
            $user_id = encryptor('decrypt', $user_id);

        return $LAVA->db->table('user')
            ->select('cover')
            ->where('id', $user_id)
            ->get()['cover'];
    }
}

/**
 * Full Name
 */
if (!function_exists('user_fullname')) {
    function user_fullname($user_id = null)
    {
        $LAVA = &lava_instance();

        if ($user_id == null)
            $user_id = $LAVA->session->userdata('user_id');
        else
            $user_id = encryptor('decrypt', $user_id);

        $result = $LAVA->db->table('user')
            ->select('email, first_name, middle_name, last_name, name_extension')
            ->where('id', $user_id)
            ->get();
        if ($result['first_name'] == null && $result['last_name'] == null)
            return $result['email'];
        else
            return $result['first_name'] . ' ' . $result['last_name'];
    }
}

/**
 * Role
 */
if (!function_exists('get_user_type')) {
    function get_user_type($user_id = null)
    {
        $LAVA = &lava_instance();

        if ($user_id == null) {
            return $LAVA->session->userdata('user_type');
        } else {
            $user_id = encryptor('decrypt', $user_id);
            return $LAVA->db->table('user')
                ->select('user_type')
                ->where('id', $user_id)
                ->get()['user_type'];
        }
    }
}

/**
 * Canditates based on position
 */
if (!function_exists('candidates')) {
    function candidates($position)
    {
        $LAVA = &lava_instance();
        $result = $LAVA->db->table('candidate')
            ->select('id, full_name')
            ->where('position', $position)
            ->get_all();

        if (!empty($result)) {
            foreach ($result as $candidate) {
                echo '<option value="' . $candidate['id'] . '">' . $candidate['full_name'] . '</option>';
            }
        } else {
            echo '<option value="">No Candidates Found</option>';
        }
    }
}
