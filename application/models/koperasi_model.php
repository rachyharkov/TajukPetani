<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Koperasi_model extends CI_Model
{
	function tampilinformasiakun($table,$where)
	{
		$select = array('*');

        $qinfo = $this->db->select($select)->from($table)->where($where)->get();
        return $qinfo->result(); 
	}

	function tampilprodukkoperasi($koperasi)
	{
		$select = array('*');

		$where = array('koperasi' => $koperasi);

        $q = $this->db->select($select)->from('detail_produk')->where($where)->get();
        return $q->result(); 
	}

	function lakukan_update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function lakukan_insert($table,$data)
	{
		$insert = $this->db->insert($table,$data);
		return $insert;
	}
}