<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

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
        $this->load->model('koperasi_model');
        $this->load->model('tajukpetanimodel');
        $this->load->library('form_validation');        
		$this->load->helper(array('form', 'url','text','date_local'));
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: GET, OPTIONS, POST, GET, PUT");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    }

	public function index()
	{
		if ($this->session->userdata('role') == 'koperasi') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('koperasi/header',$data);
			$this->load->view('koperasi/index');
			$this->load->view('koperasi/footer');
		} else if ($this->session->userdata('role') == 'petani') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('petani/header',$data);
			$this->load->view('petani/index');
			$this->load->view('petani/footer');
		} else {
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('visitor/header',$data);
			$this->load->view('visitor/index');
			$this->load->view('visitor/footer');
		}

	}

	public function home()
	{
		if ($this->session->userdata('role') == 'koperasi') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('koperasi/index',$data);
		} else if ($this->session->userdata('role') == 'petani') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('petani/index',$data);
		} else {
			$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
			$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
			$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
			$data['hargapangans'] = $this->tajukpetanimodel->showallhargapanganinfo();
			$data['cocoktanams'] = $this->tajukpetanimodel->showallcocoktanaminfo();
			$data['title'] = 'Beranda - Tajuk Petani Web App';
			$this->load->view('visitor/index',$data);
		}
	}


	public function detail_product($id)
	{
		$row = $this->visitor_model->get_by_id($id);
        if ($row) {
            $data = array(
            	'action' => site_url('career/submit_berkas'),
				'id_produk' => $row->id_produk,
				'stok' => $row->stok,
				'nama_produk' => $row->nama_produk,
				'min_pemesanan' => $row->min_pemesanan,
				'kondisi' => $row->kondisi,
				'rating' => $row->rating,
				'nama_kategori' => $row->nama_kategori,
				'varian' => $row->varian,
				'berat' => $row->berat,
				'jenis_satuan' => $row->jenis_satuan,
				'jenis_bantuan' => $row->jenis_bantuan,
				'deskripsi' => $row->deskripsi,
				'harga' => $row->harga,
				'nama_koperasi' => $row->nama_koperasi,
				'alamat_koperasi' => $row->alamat_user,
				'gambar' => $row->gambar,
		    );
			$this->load->view('visitor/header');
			$this->load->view('visitor/detail_product', $data);
			$this->load->view('visitor/footer_detail_product');
		}else{
			echo "No Data for ".$id;
			echo $row->nama_koperasi;
		}

	}

	public function pick_form($id)
	{
		$row = $this->visitor_model->get_by_id($id);
        if ($row) {
            $data = array(
            	'action' => site_url('career/submit_berkas'),
				'id_produk' => $row->id_produk,
				'stok' => $row->stok,
				'nama_produk' => $row->nama_produk,
				'min_pemesanan' => $row->min_pemesanan,
				'kondisi' => $row->kondisi,
				'rating' => $row->rating,
				'nama_kategori' => $row->nama_kategori,
				'varian' => $row->varian,
				'berat' => $row->berat,
				'jenis_satuan' => $row->jenis_satuan,
				'jenis_bantuan' => $row->jenis_bantuan,
				'deskripsi' => $row->deskripsi,
				'harga' => $row->harga,
				'nama_koperasi' => $row->nama_koperasi,
				'alamat_koperasi' => $row->alamat_user,
				'gambar' => $row->gambar,
		    );

		    $iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$this->load->view('visitor/header');
			$this->load->view('visitor/pick_form',$data);
		}else{
			echo "No Data for ".$id;
			echo $row->nama_koperasi;
		}
		
	}

	public function account_menu()
	{
		if ($this->session->userdata('role') == 'koperasi') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
			$data['title'] = 'Akun Saya - Tajuk Petani Web App';
			$this->load->view('koperasi/account', $data);
		} else if ($this->session->userdata('role') == 'petani') {
			$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
			$where = array(
				"id_user" => $iduser
			);
			$data = array(
				'qinfo' => $this->tajukpetanimodel->tampilinformasiakun('user',$where),
				'title' => 'Akun Saya - Tajuk Petani Web App',
				'countrunningtransaction' => $this->tajukpetanimodel->countactivetransaction($iduser)
			);
			$this->load->view('petani/account',$data);
		} else {
			$this->load->view('visitor/account');
		}
	}

	public function order_menu()
	{
		$this->load->view('visitor/order');
	}

	public function koperasi_menu()
	{
		$this->load->view('visitor/koperasi');
	}
}
