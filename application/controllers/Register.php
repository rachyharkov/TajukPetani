<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}

	function process() {
		$iduser = trim($this->input->post('tbnoktp'));
		$namalengkap = trim($this->input->post('tbnamalengkap'));
		$notelp = trim($this->input->post('tbnotelp'));
		$alamat = trim($this->input->post('tbalamat')).','.trim($this->input->post('tbnamalengkap')).','.trim($this->input->post('tbkelurahan')).','.trim($this->input->post('tbkecamatan')).','.trim($this->input->post('tbkota'));
		$password = trim($this->input->post('tbotppassworddummy'));
		$email = 'dummy@mail.com';
		$role = 'petani';
		$kelompoktani = 'N/A';
		$namakoperasi = 'N/A';

        $data = array(
        			'id_user' => $iduser,
                    'nama' => $namalengkap,
                    'email' => $email,
                    'password' => $password,
                    'no_telfon' => $notelp,
                    'role' => $role,
                    'Kelompok_Tani' => $kelompoktani,
                    'nama_koperasi' => $namakoperasi,
                    'alamat_user' => $alamat,
                ); 


        //print_r($data);
        //print_r($filestype);
      	$this->visitor_model->insert('user',$data);   
      	//no need to set flash session in CI for ajax
        //$this->session->set_flashdata('flashSuccess', 'successfull');
         //set page header as json format
        //$this->output->set_content_type('application/json')
        //->set_output(json_encode($res));*/
        $data['title'] = 'Registration Success';
		$this->load->view('registration_success',$data);
	}


}
