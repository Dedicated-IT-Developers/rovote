<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Organization_model extends Model
{

    public function organizations()
	{				
    	return $this->db->table('organization')
						->select('*')
    					->get_all();
	}

    public function add_organization($data)
	{				
        return $this->db->table('organization')->insert($data);
	}


}