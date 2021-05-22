<?php 
date_default_timezone_set('Asia/Jakarta');
class Verification extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Auth_model');
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: GET, OPTIONS, POST, GET, PUT");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
	}

	function index()
	{
		$this->load->view('login_page');	
	}

	function checkpassword()
	{
		$notelfon = $this->input->post('tbnotelp');
		$passwordnya = $this->input->post('tbotp');
		
		$where = array(
			'no_telfon' => $notelfon,
            'password' => $passwordnya,
		);

        $cek1 = $this->Auth_model->cek_user("user",$where);
        if($cek1->row()->password == $passwordnya) {
            if($cek1->row()->role == 'koperasi'){
                $data_session = array(
                    'nama' => $cek1->row()->nama,
                    'status' => "login",
                    'iduser' => $cek1->row()->id_user, 
                    'role' => $cek1->row()->role
                );
                $this->session->set_userdata($data_session);
                echo "koperasi";
            } elseif($cek1->row()->role == 'petani'){
                $data_session = array(
                    'nama' => $cek1->row()->nama,
                    'status' => "login",
                    'iduser' => $cek1->row()->id_user, 
                    'role' => $cek1->row()->role
                );
                $this->session->set_userdata($data_session);
                echo "petani";
            } else {
                echo "admin";
            }
        } else {
            echo "wrong";
        }
	}

	function loginkeun()
	{
		$notelfon = $this->input->post('tbnotelp');
		$where = array(
			'no_telfon' => $notelfon,
        );

		$cek1 = $this->Auth_model->cek_user("user",$where);

		if ($cek1->num_rows() > 0) //kondisi berdasarkan jumlah record
		{
			echo "ok";
		}
		else
		{
			echo "failed";
		};
	}

	function logoutkeun()
	{
		if($this->session->userdata('status') == 'login')
		{
			$this->session->sess_destroy();
			redirect(base_url('home'));//dis php
		}
		else
		{
			echo "LOGOUT FAILED! Error Code: 000";
		}
		
	}
}

?>