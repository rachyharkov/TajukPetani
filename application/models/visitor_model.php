<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

    public $table = 'tbl_dept';
    public $id = 'id_dept';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_five_products($where)
    {
        $this->db->select('detail_produk.*,kategori.*')
            ->from('detail_produk')
            ->join('kategori','kategori.id_kategori = detail_produk.id_kategori')
            ->where('kategori.nama_kategori', $where)
            ->order_by('rating')
            ->limit(5);
        return $this->db->get()->result();
        //$this->db->join('user_role', 'user_role.id = user.level');
        
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_dept', $q);
	$this->db->or_like('nama_dept', $q);
	$this->db->or_like('id_posisi', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_dept', $q);
	$this->db->or_like('nama_dept', $q);
	$this->db->or_like('id_posisi', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}