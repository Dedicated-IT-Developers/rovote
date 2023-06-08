<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Candidates based on position
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

/**
 * Voted candidates of student
 */
if (!function_exists('voted_candidate')) {
    function voted_candidate($position, $studid)
    {
        $candidates = $_SESSION['candidates_voted_by_' . $studid] ?? [];

        // dd($candidates);
        if (!empty($candidates)) {
            foreach ($candidates as $key => $value) {
                $newKey = '';
                if (strpos($key, '-') !== false) {
                    switch ($key) {
                        case 'vice-governor':
                            $newKey = 'Vice Governor';
                            break;
                        case 'board-member-1':
                            $newKey = 'Board Member 1 (SPORTS, CULTURE AND ARTS)';
                            break;
                        case 'board-member-2':
                            $newKey = 'Board Member 2 (RESEARCH AND EXTENSION)';
                            break;
                        case 'board-member-3':
                            $newKey = 'Board Member 3 (COMM/PUB MATS)';
                            break;
                        case 'board-member-4':
                            $newKey = 'Board Member 4 (DOCU AND EVALUATION)';
                            break;
                        case 'board-member-5':
                            $newKey = 'Board Member 5 (IGP)';
                            break;
                    }
                } else {
                    if ($key != 'studid') {
                        $newKey = ucfirst($key);
                    }
                }

                if ($newKey == $position) {
                    $LAVA = &lava_instance();
                    $result = $LAVA->db->table('candidate')
                        ->select('id, organization_id, full_name, college, program, bio, position, picture, video, year_level, section, status, semester, academic_year')
                        ->where('position', $position)
                        ->where('id', $value)
                        ->get();
                    return $result;
                    break;
                }
            }
        } else {
            return [];
        }
    }
}
