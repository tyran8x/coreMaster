<?php 

class Content_model extends CI_Model {
    function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$this->load->library('image_moo');
	}

    function getListAll()
    {
        $this->db->select();
		$this->db->from("cms_content");
	//	$this->db->join("usergroups", 'users.usergroups_id=usergroups.usergroupsid');
		//$this->db->join("userinfo", 'users.userinfo_id=userinfo.userinfoid');
		//$this->db->where_not_in('users.id', $id);
		$query = $this->db->get();
        return $query->result_array();
    }
}