<?php

/**
 * 
 */
class Auth_model extends CI_Model
{
	
	function cek_user($table,$where)
	{
		$query = $this->db->get_where($table,$where);
		return $query;
	}
	
	function lakukan_update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function loadconfig($namaconfig){
        $select = array('*');
        $conf = $this->db->select($select)->from('tbl_config')->where('nama_config',$namaconfig)->get();
        return $conf->row();
    }
}

?>