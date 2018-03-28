<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Model
{
    public function getdata()
    {
        $query = $this->db->get('parson');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function submit()
    {
        $field = array(
            'first_name' => $this->input->post('firstName'),
            'last_name' => $this->input->post('lastName'),
            'email' => $this->input->post('email')
        );
        $this->db->insert('parson', $field);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getParsonById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('parson');

        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    
    public function update()
    {
        $id = $this->input->post('hidden_txt');
        $field = array(
            'first_name' => $this->input->post('firstName'),
            'last_name' => $this->input->post('lastName'),
            'email' => $this->input->post('email')
        );
        $this->db->where('id', $id);
        $this->db->update('parson', $field);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('parson');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

}