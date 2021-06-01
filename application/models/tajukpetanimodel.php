<?php
defined('BASEPATH') OR exit('No direct access allowed');

class tajukpetanimodel extends CI_Model
{
	function tampilinformasiakun($table,$where)
	{
		$select = array('*');

        $qinfo = $this->db->select($select)->from($table)->where($where)->get();
        return $qinfo->result(); 
	}

    function fetchinfoakunassingledata($table,$where)
    {
        $select = array('*');

        $qinfo = $this->db->select($select)->from($table)->where($where)->get();
        return $qinfo->row(); 
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

    function generateInvoice($iduser){
        
        $this->db->select('SUBSTRING(pesanan.id_invoice,5, 5) as id_invoice', FALSE);
        $this->db->where('id_user', $iduser);
        $this->db->order_by('id_invoice','DESC');
        $this->db->limit(1);
        $query = $this->db->get('pesanan');

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 3; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        if($query->num_rows() <> 0){ //pastikan data ada
            $data = $query->row();
            $kode = intval($data->id_invoice) + 1; //tambah data baru bukan berdasarkan dari id username    
        } else {//kalo masih baru, start dari 0
             $kode = 0;
        }

        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);    
        $kodetampil = "INV-".$batas.$randomString;
        return $kodetampil;
    }

    function get_invoice($iduser, $idinvoice)
    {
        $where = array(
            'pesanan.id_user' => $iduser,
            'pesanan.id_invoice' => $idinvoice
        );

        $this->db->select('*')->from('pesanan')
            ->join('user','user.id_user = pesanan.id_user')
            ->join('detail_produk','detail_produk.id_produk = pesanan.id_produk');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }

    function countactivetransaction($iduser)
    {
        $where = array(
            'id_user' => $iduser,
            'status_invoice' => 'BELUM DIBAYAR'
        );
        $this->db->where($where);
        $this->db->from("pesanan");
        return $this->db->count_all_results();
    }   

	/*function tampil_peserta()
    {
        return $this->db->get('tbl_peserta');
    }

    function tampil_edit_peserta()
    {
    	$select = array('tbl_user.id_user','tbl_peserta.no_ktp','tbl_peserta.nama_lengkap','tbl_peserta.jenis_kelamin','tbl_peserta.alamat','tbl_user.username','tbl_user.password','tbl_user.role');
    	$querya = $this->db->select($select)->from('tbl_peserta')->join('tbl_user','tbl_peserta.id_user = tbl_user.id_user')->get();
    	return $querya->result();
    }

    function lakukan_delete_peserta($tbiduser)
	{
		$this->db->where('id_user', $tbiduser);
		
     	$query1 = $this->db->get('tbl_user');
     	$query2 = $this->db->get('tbl_peserta');

     	$this->db->delete('tbl_user', array('id_user' => $tbiduser));
     	$this->db->delete('tbl_peserta', array('id_user' => $tbiduser));
    }

    function tampil_soal()
    {
        $select = array('id_kolomjawaban','soal');

        $soal = $this->db->select($select)->from('tbl_kolomjawaban')->get();
        return $soal->result();  
    }

    function tampil_soal2($data)
    {
        $select = array('*');
		$get = $this->db->select($select)->from('tbl_kolomjawaban')->where($data)->get();
		return $get->result();	  
    }

    function hitungpesertaberdasarkanstatus()
    {
        $select = array('(select count(*) from tbl_peserta where status = "BM") as belummengerjakan','(select count(*) from tbl_peserta where status = "SM") as sedangmengerjakan','(select count(*) from tbl_peserta where status = "DONE") as selesaimengerjakan','(select count(*) from tbl_peserta) as totalpeserta');

        $count = $this->db->select($select)->from('tbl_peserta')->limit(1)->get();
        return $count->result();      
    }

    function psedangtest()
    {
        $select = array('*');
        $wherenya = array('status' => 'SM' );

        $list = $this->db->select($select)->from('tbl_peserta')->where($wherenya)->get();
        return $list->result();
    }

    function p_top10()
    {
        $select = array('tbl_peserta.id_user as iduser', 'tbl_peserta.nama_lengkap as namleng','tbl_peserta.no_ktp as noktp', 'ttgrouped.nilai1 as NilaiAngkaHilang', 'ttgrouped.nilai2 as NilaiHurufHilang', 'ttgrouped.nilai3 as NilaiSimbolHilang');
        
        $select2 = '(SELECT id_user, nilai1,nilai2,nilai3, MAX(nilai1) AS MaxNilai1,MAX(nilai2) AS MaxNilai2,MAX(nilai3) AS MaxNilai3 FROM tbl_nilai GROUP BY id_user) ttgrouped';

        $gas = $this->db->select($select)->from('tbl_peserta')->join($select2,'tbl_peserta.id_user = ttgrouped.id_user')->order_by('NilaiAngkaHilang', 'NilaiHurufHilang', 'NilaiSimbolHilang','desc')->limit(10)->get();

        return $gas->result();
    }

    function tampil_peserta_with_nilai()
    {
        $select = array('tbl_peserta.id_user as iduser', 'tbl_peserta.nama_lengkap as namleng','tbl_peserta.no_ktp as noktp','tbl_peserta.alamat as alamat','tbl_peserta.jenis_kelamin as jk','tbl_nilai.nilai1 as NilaiAngkaHilang', 'tbl_nilai.nilai2 as NilaiHurufHilang', 'tbl_nilai.nilai3 as NilaiSimbolHilang','tbl_nilai.tanggal as tgldatamasuk');
        $wherenya = array('status' => 'DONE' );
        $gas = $this->db->select($select)->from('tbl_peserta')->join('tbl_nilai','tbl_nilai.id_user = tbl_peserta.id_user')->order_by('tgldatamasuk','asc')->where($wherenya)->get();

        return $gas->result();
    }

    function detail_nilai_peserta($where)
    {
        $select = array('*');
        $dtl = $this->db->select($select)->from('tbl_nilai')->where($where)->order_by('tanggal','asc')->get();
        return $dtl->result();
    }

    function info_peserta_overview($where)
    {
        $select = array('tbl_user.id_user as iduser','tbl_peserta.no_ktp as noktp','tbl_peserta.nama_lengkap as namleng','tbl_peserta.jenis_kelamin as jk','tbl_peserta.alamat as almt','tbl_user.username as username','tbl_user.role as role', 'tbl_nilai.nilai1 as n1','tbl_nilai.nilai2 as n2', 'tbl_nilai.nilai3 as n3','tbl_nilai.tanggal as datamasuk','tbl_nilai.s0jlcorrect as s0jlcorrect','tbl_nilai.s0jlwrong as s0jlwrong','tbl_nilai.s0jlanswered as s0jlanswered','tbl_nilai.s0jlnotanswered as s0jlnotanswered','tbl_nilai.s1jlcorrect as s1jlcorrect','tbl_nilai.s1jlwrong as s1jlwrong','tbl_nilai.s1jlanswered as s1jlanswered','tbl_nilai.s1jlnotanswered as s1jlnotanswered','tbl_nilai.s2jlcorrect as s2jlcorrect','tbl_nilai.s2jlwrong as s2jlwrong','tbl_nilai.s2jlanswered as s2jlanswered','tbl_nilai.s2jlnotanswered as s2jlnotanswered');
        $querya = $this->db->select($select)->from('tbl_peserta')->join('tbl_user','tbl_peserta.id_user = tbl_user.id_user')->join('tbl_nilai','tbl_peserta.id_user = tbl_nilai.id_user')->where($where)->order_by('n1 DESC','n2 DESC','n3 DESC')->limit(1)->get();
        return $querya->result();
    }

    function tampil_peserta_belum_ngerjain()
    {
        $select = array('id_user', 'nama_lengkap','no_ktp','alamat','jenis_kelamin');
        $wherenya = array('status' => 'BM' );
        $gas = $this->db->select($select)->from('tbl_peserta')->where($wherenya)->get();

        return $gas->result();    
    }

    function import_soal($data)
    {
        foreach ($data as $k) {
            $where = array(
              'id_kolomjawaban' => $k['id_kolomjawaban'],
              'kolom'   => $k['kolom']
            );

            $datanya = array(
                'listjawaban' => $k['jawabanlist'],
                'soal'  => $k['soal']
            );
            $this->db->where($where);
            $this->db->update('tbl_kolomjawaban',$datanya);
        }
     
    }

    function loadconfig($namaconfig){
        $select = array('*');
        $conf = $this->db->select($select)->from('tbl_config')->where('nama_config',$namaconfig)->get();
        return $conf->result();
    }*/

}
