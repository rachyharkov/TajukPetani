<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Musim_cocok_tanam extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Musim_cocok_tanam_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'musim_cocok_tanam/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'musim_cocok_tanam/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'musim_cocok_tanam/index.html';
            $config['first_url'] = base_url() . 'musim_cocok_tanam/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Musim_cocok_tanam_model->total_rows($q);
        $musim_cocok_tanam = $this->Musim_cocok_tanam_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'musim_cocok_tanam_data' => $musim_cocok_tanam,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('musim_cocok_tanam/musim_cocok_tanam_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Musim_cocok_tanam_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'bulan' => $row->bulan,
		'musim_tanaman' => $row->musim_tanaman,
	    );
            $this->load->view('musim_cocok_tanam/musim_cocok_tanam_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('musim_cocok_tanam'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('musim_cocok_tanam/create_action'),
	    'id' => set_value('id'),
	    'bulan' => set_value('bulan'),
	    'musim_tanaman' => set_value('musim_tanaman'),
	);
        $this->load->view('musim_cocok_tanam/musim_cocok_tanam_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'bulan' => $this->input->post('bulan',TRUE),
		'musim_tanaman' => $this->input->post('musim_tanaman',TRUE),
	    );

            $this->Musim_cocok_tanam_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('musim_cocok_tanam'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Musim_cocok_tanam_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('musim_cocok_tanam/update_action'),
		'id' => set_value('id', $row->id),
		'bulan' => set_value('bulan', $row->bulan),
		'musim_tanaman' => set_value('musim_tanaman', $row->musim_tanaman),
	    );
            $this->load->view('musim_cocok_tanam/musim_cocok_tanam_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('musim_cocok_tanam'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'bulan' => $this->input->post('bulan',TRUE),
		'musim_tanaman' => $this->input->post('musim_tanaman',TRUE),
	    );

            $this->Musim_cocok_tanam_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('musim_cocok_tanam'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Musim_cocok_tanam_model->get_by_id($id);

        if ($row) {
            $this->Musim_cocok_tanam_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('musim_cocok_tanam'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('musim_cocok_tanam'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
	$this->form_validation->set_rules('musim_tanaman', 'musim tanaman', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Musim_cocok_tanam.php */
/* Location: ./application/controllers/Musim_cocok_tanam.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-06-02 09:54:46 */
/* http://harviacode.com */