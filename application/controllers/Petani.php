<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('visitor_model');
        $this->load->model('tajukpetanimodel');
        $this->load->library('form_validation');        
		$this->load->helper(array('form', 'url','text'));
    }

	public function view_invoice($iduser, $idinvoice)
	{
		$row = $this->tajukpetanimodel->get_invoice($iduser, $idinvoice);
        if ($row) {
            $data = array(
            	'action' => site_url('career/submit_berkas'),
				'id_invoice' => $row->id_invoice,
				'nama' => $row->nama,
				'nama_produk' => $row->nama_produk,
				'total_harga'=> $row->total_harga,
				'alamat_user' => $row->alamat_user,
				'harga' => $row->harga,
				'jumbel' => $row->jumbel,
				'tanggal_pengajuan' => $row->tanggal_pengajuan,
				'tanggal_pengambilan' => $row->tanggal_pengambilan,
				'batas_pengambilan' => $row->batas_pengambilan,
				'jam_ambil' => $row->jam_ambil,
				'metode_bayar' => $row->metode_bayar,
				'catatan' => $row->catatan,
				'status_invoice' => $row->status_invoice
		    );
		    $this->load->view('petani/header', $data);
			$this->load->view('petani/invoice_page', $data);
		}else{
			echo "No Data for ".$idinvoice;
			echo $row->id_invoice;
		}
		
	}

	public function insert_pesanan()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data = $this->tajukpetanimodel->fetchinfoakunassingledata('user',$where);

		$idinvoice = $this->tajukpetanimodel->generateInvoice($iduser);
        $idproduk = trim($this->input->post('idproduk'));
        $jumbel = trim($this->input->post('jumbel'));
        $tanggalpengambilan = trim($this->input->post('tanggalambil'));
        $bataspengambilan = trim($this->input->post('batasambil'));
        $jamambil = trim($this->input->post('jamambil'));
        $totalharga = trim($this->input->post('totalharga'));
        $metodebayar = trim($this->input->post('metodebayar'));
        $catatan = trim($this->input->post('catatan'));
        
        $data = array(
			'id_user' => $iduser,
			'id_invoice' => $idinvoice,
            'id_produk' => $idproduk,
            'jumbel' => $jumbel,
            'tanggal_pengambilan' => $tanggalpengambilan,
            'batas_pengambilan' => $bataspengambilan,
            'jam_ambil' => $jamambil,
            'total_harga' => $totalharga,
            'metode_bayar' => $metodebayar,
            'catatan' => $catatan,
            'status_invoice' => 'BELUM DIBAYAR'
        );


        //print_r($data);
        //print_r($filestype);
      	$this->tajukpetanimodel->lakukan_insert('pesanan',$data);   
      	$result['iduser']= $iduser;
      	$result['idinvoice']= $idinvoice;
      	//no need to set flash session in CI for ajax
        //$this->session->set_flashdata('flashSuccess', 'successfull');
         //set page header as json format
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
}
