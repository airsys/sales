<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_home extends CI_Model {

	function addform($data){
        $this->db->set('BRANDNAME', $data['name']);
        $this->db->set('CONTACTNAME', $data['contact']);
        $this->db->set('ALAMAT', $data['address']);
        $this->db->set('GROUPBRAND', $data['group']);
        $this->db->set('NOTES', $data['notes']);
        $this->db->set('WEBSITE', $data['website']);
        $this->db->set('SOSMED', $data['social']);
        $this->db->insert('ms_customer');
    }

    function loadtabel(){
		$data = array();
        $this->db->select('*');
		$this->db->from('ms_customer');
		$this->db->where('STATUS_CUSTOMER =', 0);
		$query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function deletecus($id)
    {
        $data = array(
               'STATUS_CUSTOMER' => '1'
            );

        $this->db->where('ID_CUSTOMER', $id);
        $this->db->update('ms_customer', $data); 
    }

    function editpage($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->from('ms_customer');
        $this->db->where('STATUS_CUSTOMER =', 0);
        $this->db->where('ID_CUSTOMER =', $id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function editform($data)
    {
        $this->db->set('BRANDNAME', $data['name']);
        $this->db->set('CONTACTNAME', $data['contact']);
        $this->db->set('ALAMAT', $data['address']);
        $this->db->set('GROUPBRAND', $data['group']);
        $this->db->set('NOTES', $data['notes']);
        $this->db->set('WEBSITE', $data['website']);
        $this->db->set('SOSMED', $data['social']);
        $this->db->where('ID_CUSTOMER',$data['id']);
        $this->db->update('ms_customer');
    }

    function avaibility($nama)
    {
        $this->db->where('BRANDNAME', $nama);
        $this->db->where('STATUS_CUSTOMER =', 0);
        $query = $this->db->get('ms_customer');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else{
            return FALSE;
        }
    }

}

/* End of file m_home.php */
/* Location: ./application/models/m_home.php */
