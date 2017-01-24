<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}

	public function index()
	{
		$loadtabel = $this->m_home->loadtabel();
		$data['tabel'] = '';
         $no = 1;
         foreach ($loadtabel as $key) {
            $data['tabel'] .= '
                        <tr>
                        <td>'.$no.'</td>
                        <td>'.$key->BRANDNAME.'</td>
                        <td>'.$key->CONTACTNAME.'</td>
                        <td>'.$key->GROUPBRAND.'</td>
                        <td>
                        	<a class="btn btn-default" href="'.base_url('home/editpage/'.$key->ID_CUSTOMER.'/detail').'">Detail</a>
                        	<a class="btn btn-primary" href="'.base_url('home/editpage/'.$key->ID_CUSTOMER.'/edit').'">Edit</a>
                        	<a class="btn btn-default" onclick="del(\''.$key->ID_CUSTOMER.'\')" href="javascript:void(0)">Hapus</a></td>
                        </td>
                        </tr>
                    ';
            $no++;
        }

		$this->nametheme('home/base', $data);
	}

	function addpage()
	{
		$data = array('title' => 'Form Tambah');
		$this->nametheme('home/add', $data);
	}

	

	function saveedit()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'contact' => $this->input->post('contact'),
			'address' => $this->input->post('address'),
			'group'   => $this->input->post('group'),
			'notes'	  => $this->input->post('notes'),
			'website' => $this->input->post('website'),
			'social'  => $this->input->post('social'));

		$insert = $this->m_home->editform($data);
		echo "<script language=\"javascript\">alert('Data Berhasil Diedit.');</script>";
		redirect('home','refresh');
	}

	function deletecus()
	{
		$id = $this->uri->segment(3);
		$delete = $this->m_home->deletecus($id);
	}

	function editpage()
	{
		$id = $this->uri->segment(3);
		$status = $this->uri->segment(4);

		$edit = $this->m_home->editpage($id);
		foreach ($edit as $key) {
			$data = array('id'				=> $key->ID_CUSTOMER,
							'name' 			=> $key->BRANDNAME,
							'contact' 		=> $key->CONTACTNAME,
							'address'		=> $key->ALAMAT,
							'group'			=> $key->GROUPBRAND,
							'notes'			=> $key->NOTES,
							'website'		=> $key->WEBSITE,
							'social'		=> $key->SOSMED);
		}

		if ($status == 'edit') {
			$this->nametheme('home/edit', $data);
		} elseif ($status == 'detail') {
			$this->nametheme('home/lihat', $data);
		} else {
			redirect('home','refresh');
		}
		
	}

	

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
