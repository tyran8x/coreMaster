<?php 

class QuanHuyen_model extends MY_Model {

    function getQuanHuyen($tabel, $field = '*', $cond ='')
    {
        $this->db->select($field);
        $this->db->from($tabel);
        if(!empty($cond)) $this->db->where($cond);
        return $this->db->get()->result();
    }
}