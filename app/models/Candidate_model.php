<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Candidate_model extends Model
{

    public function candidates()
	{				
    	return $this->db->table('candidate')
						->select('*')
    					->get_all();
	}

    public function add_candidate($data)
	{				
        return $this->db->table('candidate')->insert($data);
	}

    /**
     * REFS
     */

    public function select($id)
    {
        return $this->db->table('course')
            ->select('id, user_id, name, description, avatar, cover, privacy, code, category, language')					
            ->where('id', $id)
            ->get();
    }

    public function update($data, $id)
    {
        return $this->db->table('course')
                        ->where('id', $id)
                        ->update($data);
    }

    public function remove($id)
    {
        return $this->db->table('course')
            ->where('id', $id)
            ->delete();
    }

    public function insert($data)
    {
        $check = $this->db->table('user_course')
            ->select('id')					
            ->where('user_id', $data['user_id'])
            ->where('course_id', $data['course_id'])
            ->get();

        if(!$check){
            return $this->db->table('user_course')->insert($data);
        }
    }

}

?>