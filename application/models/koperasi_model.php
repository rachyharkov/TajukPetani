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

        $q = $this->db->select($select)->from('detail_produk')->where($where)->order_by('tanggal_post','DESC')->get();
        return $q->result(); 
	}

	   // get data by id
    function get_by_id($id)
    {
        $this->db->select('*')->from('detail_produk');
        $this->db->where('id_produk', $id);
        $query = $this->db->get();
        return $query->row();
    }

	function generateIdProduk(){
        
        $this->db->select('RIGHT(detail_produk.id_produk,5) as id_produk', FALSE);
        $this->db->order_by('id_produk','DESC');
        $this->db->limit(1);
        $query = $this->db->get('detail_produk');

        if($query->num_rows() <> 0){ //pastikan data ada
            $data = $query->row();
            $kode = intval($data->id_produk) + 1; //tambah data baru bukan berdasarkan dari id username    
        } else {//kalo masih baru, start dari 0
             $kode = 0;
        }

        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "PD".$batas;
        return $kodetampil;
    }

    function generateIdProdukforgambar(){
        
        $this->db->select('RIGHT(detail_produk.id_produk,5) as id_produk', FALSE);
        $this->db->order_by('id_produk','DESC');
        $this->db->limit(1);
        $query = $this->db->get('detail_produk');

        if($query->num_rows() <> 0){ //pastikan data ada
            $data = $query->row();
            $kode = intval($data->id_produk); //tambah data baru bukan berdasarkan dari id username    
        } else {//kalo masih baru, start dari 0
             $kode = 0;
        }

        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "PD".$batas;
        return $kodetampil;
    }

	function tampilallkategori()
	{
        $q = $this->db->select('*')->from('kategori')->get();
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

	function lakukan_delete($column, $id)
    {
        $this->db->where($column, $id);
        $this->db->delete('detail_produk');
    }

    function countactivetransaction($koperasi)
    {
        $where = array(
            'detail_produk.koperasi' => $koperasi,
            'pesanan.status_invoice' => 'BELUM DIBAYAR',
            'pesanan.status_invoice' => 'DALAM PERJALANAN',
            'pesanan.status_invoice' => 'MENUNGGU DIAMBIL'
        );
        $this->db->where($where);
        $this->db->from("pesanan")
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk')
            ->join('user','user.id_user = detail_produk.koperasi');
        return $this->db->count_all_results();
    }

    function countalltransaction($koperasi)
    {
        $where = array(
            'detail_produk.koperasi' => $koperasi,
        );
        $this->db->where($where);
        $this->db->from("pesanan")
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk')
            ->join('user','user.id_user = detail_produk.koperasi');
        return $this->db->count_all_results();
    }

    function counttransaction($koperasi, $status)
    {
        $where = array(
            'detail_produk.koperasi' => $koperasi,
            'status_invoice' => $status,
        );
        $this->db->where($where);
        $this->db->from("pesanan")
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk')
            ->join('user','user.id_user = detail_produk.koperasi');
        return $this->db->count_all_results();
    }

    function showalltransaction($koperasi) {
        $where = array(
            'detail_produk.koperasi' => $koperasi
        );
        $this->db->select('*')->from('pesanan')
            ->join('user','user.id_user = pesanan.id_user')
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    function showtransactionfor($koperasi, $status) {
        $where = array(
            'detail_produk.koperasi' => $koperasi,
            'pesanan.status_invoice' => $status
        );
        $this->db->select('*')->from('pesanan')
            ->join('user','user.id_user = pesanan.id_user')
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
}