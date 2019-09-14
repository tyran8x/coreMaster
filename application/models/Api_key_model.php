<?php 

class Api_key_model extends MY_Model {

    function listall() {
		$this->db->select();
		$this->db->from("tinhthanh");
		//$this->db->join("usergroups", 'users.usergroups_id=usergroups.usergroupsid');
		//$this->db->join("userinfo", 'users.userinfo_id=userinfo.userinfoid');
		//$this->db->where_not_in('users.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
}