<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {

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
		if ($this->session->userdata('role') !== 'koperasi') {
			echo "string";
			return;
		}
        $this->load->model('koperasi_model');
        $this->load->model('visitor_model');
        $this->load->model('tajukpetanimodel');
        $this->load->library('form_validation');        
		$this->load->helper(array('form', 'url','text'));
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: GET, OPTIONS, POST, GET, PUT");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    }

	public function index()
	{
        $iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
		$data['title'] = 'Beranda - Tajuk Petani Web App';
		$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
		$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
		$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
		$data['title'] = 'Beranda - Tajuk Petani Web App';
		$this->load->view('koperasi/header',$data);
		$this->load->view('koperasi/index');
		$this->load->view('koperasi/footer');
	}

	public function home()
	{
		$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('1');
		$data['listfiveproductspestisida'] = $this->visitor_model->get_five_products('2');
		$data['listfiveproductsbibit'] = $this->visitor_model->get_five_products('3');
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
		$data['title'] = 'Beranda - Tajuk Petani Web App';
		$this->load->view('koperasi/index',$data);
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
			$this->load->view('koperasi /header');
			$this->load->view('koperasi/detail_product', $data);
			$this->load->view('koperasi/footer_detail_product');
		}else{
			echo "No Data for ".$id;
			echo $row->nama_koperasi;
		}

	}

	public function pick_form()
	{

		$this->load->view('koperasi/header');
		$this->load->view('koperasi/pick_form');
		$this->load->view('koperasi/footer_pickform');
	}

	public function account_menu()
	{
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$where = array(
			"id_user" => $iduser
		);
		$data['qinfo'] = $this->tajukpetanimodel->tampilinformasiakun('user',$where);
		$data['title'] = 'Akun Saya - Tajuk Petani Web App';
		$this->load->view('koperasi/account', $data);
	}

	public function order_menu()
	{
		$this->load->view('koperasi/order');
	}


	public function koperasi_products() {
		
		$iduser = $this->session->userdata('iduser'); //ambil data berdasarkan sessionuserdata
		$data['products'] = $this->koperasi_model->tampilprodukkoperasi($iduser);
		$data['title'] = 'Produk - Tajuk Petani Web App';
		$this->load->view('koperasi/header',$data);
		$this->load->view('koperasi/daftar_produk');
	}

	public function tambah_product() {

		$data['kategori'] = $this->koperasi_model->tampilallkategori();
		$data['title'] = 'Tambah Produk - Tajuk Petani Web App';
		$this->load->view('koperasi/header', $data);
		$this->load->view('koperasi/tambah_produk');	
	}

	function insert_product_operation() {
		$id_produk = $this->koperasi_model->generateNewDataNilai();
		$namaproduk = trim($this->input->post('tbnamaproduk'));
        $stok = trim($this->input->post('tbstok'));
        $minpemesanan = trim($this->input->post('tbminpemesanan'));
        $kondisi = trim($this->input->post('tbkondisi'));
        $rating = 5;
        $kategori = trim($this->input->post('tbkategori'));
        $varian = trim($this->input->post('tbvarian'));
        $berat = trim($this->input->post('tbberatnumber'));
        $jenissatuan = trim($this->input->post('tbjenissatuan'));
        $jenisbantuan = trim($this->input->post('tbjenisbantuan'));
        $deskripsi = trim($this->input->post('tbdeskripsi'));
        $harga = trim($this->input->post('tbharga'));
        $koperasi = trim($this->input->post('koperasi'));
        $jumlahgambar = $this->input->post('jumlahfile');

        $idprodukbaru = $this->koperasi_model->generateNewDataNilai();

        $arraygambar = array();

		// for example
		for ($i = 0; $i < $jumlahgambar; ++$i) {
		    $arraygambar[] = 'img'.$i.'product'.$idprodukbaru;
		}

		$gambarlist = join(";",$arraygambar);

        $data = array(
        			'id_produk' => $id_produk,
                    'stok' => $stok,
                    'nama_produk' => $namaproduk,
                    'min_pemesanan' => $minpemesanan,
                    'kondisi' => $kondisi,
                    'rating' => $rating,
                    'id_kategori' => $kategori,
                    'varian' => $varian,
                    'berat' => $berat,
                    'jenis_satuan' => $jenissatuan,
                    'jenis_bantuan' => $jenisbantuan,
                    'deskripsi' => $deskripsi,
                    'harga' => $harga,
                    'koperasi' => $koperasi,
                    'gambar' => $gambarlist
                ); 


        print_r($data);
      	/*$this->db->insert('contact',$data);   
      	$res['msg']="successfull";
      	//no need to set flash session in CI for ajax
        //$this->session->set_flashdata('flashSuccess', 'successfull');
         //set page header as json format
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($res));*/
	}

	public function uploadGambarProduk()
	{
	    $this->load->library('upload');//loading the library
	    $imagePath = realpath(APPPATH . '../image-data/koperasi');//this is your real path APPPATH means you are at the application folder
	    $number_of_files_uploaded = count($_FILES['files']['name']);

	    $idprodukbaru = $this->koperasi_model->generateNewDataNilai();

	    if ($number_of_files_uploaded > 5){ // checking how many images your user/client can upload
	        $productImages['return'] = false;
	        $productImages['message'] = "You can upload 5 Images";
	        echo json_encode($productImages);
	    }
	    else{
	        for ($i = 0; $i <  $number_of_files_uploaded; $i++) {
	            $_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
	            $_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
	            $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	            $_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
	            $_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
	            //configuration for upload your images
	            $config = array(
	                'file_name'     => 'img'.$i.'product'.$idprodukbaru,
	                'allowed_types' => 'jpg|jpeg|png|gif',
	                'max_size'      => 3000,
	                'overwrite'     => FALSE,
	                'upload_path'
	                =>$imagePath
	            );
	            $this->upload->initialize($config);
	            $errCount = 0;//counting errrs
	            if (!$this->upload->do_upload())
	            {
	                $error = array('error' => $this->upload->display_errors());
	                $productImages[] = array(
	                    'errors'=> $error
	                );//saving arrors in the array
	            }
	            else
	            {
	                $filename = $this->upload->data();
	                $productImages[] = array(
	                    'fileName'=>$filename['file_name'],
	                );
	            }//if file uploaded
	            
	        }//for loop ends here
	        echo json_encode($productImages);//sending the data to the jquery/ajax or you can save the files name inside your database.
	    }//else

	}

	public function koperasi_menu()
	{
		$this->load->view('koperasi/koperasi');
	}

}