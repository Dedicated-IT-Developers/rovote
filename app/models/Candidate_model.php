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
     * REFERENCE LANG
     */

    public function select($id)
    {
        return $this->db->table('table')
            ->select('id, etc')					
            ->where('id', $id)
            ->get();
    }

    public function update($data, $id)
    {
        return $this->db->table('table')
                        ->where('id', $id)
                        ->update($data);
    }

    public function remove($id)
    {
        return $this->db->table('table')
            ->where('id', $id)
            ->delete();
    }

    public function insert($data)
    {
        return $this->db->table('table')->insert($data);
    }

}

?>