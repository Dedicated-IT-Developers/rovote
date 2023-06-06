<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Student_model extends Model
{

    public function students($studid)
    {
        if ($studid == null) {
            return $this->db->table('student')->select('*')->where('CORID=?', [2])->get_all();
        } else {
            return $this->db->table('student')
                ->select('*')
                ->where('CORID=? AND STUDID=?', [2, $studid])
                ->get();
        }
    }
}
