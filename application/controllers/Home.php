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
        $this->load->library('form_validation');        
		$this->load->helper(array('form', 'url','text'));
    }

	public function index()
	{
		$data['listfiveproductspupuk'] = $this->visitor_model->get_five_products('Pupuk');
		$data['title'] = 'Beranda - Tajuk Petani Web App';
		$this->load->view('visitor/header',$data);
		$this->load->view('visitor/index');
		$this->load->view('visitor/footer');
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
}
