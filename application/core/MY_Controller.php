<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function nametheme($content, $contentdata = NULL)
	{
		

		$header = array(
				'title' => 'Name Project'
			);

		$footer['title'] = '';

		$this->load->view('theme/header', $header);
		$this->load->view('theme/sidebar');
		$this->load->view($content, $contentdata);
		$this->load->view('theme/footer', $footer);
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */