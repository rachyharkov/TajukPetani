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

	public function index()
	{
        $iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);

		$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('Pupuk');
		$data['title'] = 'Beranda - Tajuk Petani Web App';
		$this->load->view('petani/header',$data);
		$this->load->view('petani/index');
		$this->load->view('petani/footer');
	}


	public function detail_product()
	{
		$this->load->view('visitor/header');
		$this->load->view('visitor/detail_product');
		$this->load->view('visitor/footer_detail_product');
	}

	public function pick_form()
	{
		$this->load->view('visitor/header');
		$this->load->view('visitor/pick_form');
		$this->load->view('visitor/footer_pickform');
	}

	public function insert_pesanan()
	{

		$iduser = trim($this->input->post('iduser'));
        $idproduk = trim($this->input->post('idproduk'));
        $jumbel = trim($this->input->post('jumbel'));
        $tanggalpengambilan = trim($this->input->post('tanggalpengambilan'));
        $bataspengambilan = trim($this->input->post('bataspengambilan'));
        $jamambil = trim($this->input->post('jamambil'));
        $totalharga = trim($this->input->post('totalharga'));
        $metodebayar = trim($this->input->post('metodebayar'));
        $catatan = trim($this->input->post('catatan'));
        
        $data = array(
        			'id_user' => $iduser,
                    'id_produk' => $idproduk,
                    'jumbel' => $jumbel,
                    'tanggal_pengambilan' => $tanggalpengambilan,
                    'batas_pengambilan' => $bataspengambilan,
                    'jam_ambil' => $jamambil,
                    'total_harga' => $totalharga,
                    'metode_bayar' => $metodebayar,
                    'catatan' => $catatan
                ); 


        //print_r($data);
        //print_r($filestype);
      	$this->tajukpetanimodel->lakukan_insert('pesanan',$data);   
      	$res['msg']="successfull";
      	//no need to set flash session in CI for ajax
        //$this->session->set_flashdata('flashSuccess', 'successfull');
         //set page header as json format
        //$this->output->set_content_type('application/json')
        //->set_output(json_encode($res));*/
        $this->tambah_product();
	}
}
