<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Vote_model extends Model
{
    public function check_voting_status($studid)
    {
        $voted = $this->db->table('vote')
            ->select('user_id')
            ->where('user_id', $studid)
            ->get();

        if ($voted) {
            return true;
        } else {
            return false;
        }
    }

    public function add_vote($data)
    {
        return $this->db->table('vote')->insert($data);
    }
}
