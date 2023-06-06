<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');


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
