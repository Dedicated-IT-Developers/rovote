<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Student_model extends Model
{
    public function add_vote($data)
    {
        $check = $this->db->table('vote')
            ->select('user_id')
            ->where('user_id', $data['user_id'])
            ->where('candidate_id', $data['candidate_id'])
            ->get();

        if (!$check) {
            return $this->db->table('vote')->insert($data);
        }
    }
}
