<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addform extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}

	public function index()
	{
		$data = array('title' => 'Form Tambah');
		$this->nametheme('home/add', $data);
	}


	function avaibility()
    {
        if (array_key_exists('nama', $_POST)) {
            $nama = $this->input->post('name');
            if ($this->m_home->avaibility($nama)) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }

    function saveform()
	{
		$data = array('name' => $this->input->post('name'),
			'contact' => $this->input->post('contact'),
			'address' => $this->input->post('address'),
			'group'   => $this->input->post('group'),
			'notes'	  => $this->input->post('notes'),
			'website' => $this->input->post('website'),
			'social'  => $this->input->post('social'));

		$insert = $this->m_home->addform($data);
		echo "<script language=\"javascript\">alert('Data Berhasil Diinput.');</script>";
		redirect('home','refresh');
	}

}

/* End of file addform.php */
/* Location: ./application/controllers/addform.php */