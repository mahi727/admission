<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends  MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User');

    }
    function index(){
        $data = $cond = $this->input->post();
        $data['users'] = $this->User->get_user_list($cond);
        $data['title'] = 'User';
        $data['header'] = 'User List';
        $this->layout("User/index", $data);
    }

    function add(){
        if($_POST) {
            $data = $this->input->post();
            if($this->User->add($data)){
                $this->session->set_flashdata('success',"Data has been successfully added.");
                redirect(base_url('Users'));
            }
        }
        $data = [];
        $data['action'] = 'add';
        $data['title'] = 'Add User';
        $data['header'] = 'Add New User';
        $this->layout("User/save", $data);
    }

    function edit($id){
        if ($_POST) {
            $data = $this->input->post();
            if ($this->User->edit( $data, $id)) {
                $this->session->set_flashdata('success',"Data has been succesfully edited.");
                redirect(base_url('Users'), 'refresh');
            } else {
                $this->session->set_flashdata('error',"Error!!");
                redirect(base_url('Users'), 'refresh');
            }
        }
        $data['row'] = $this->User->get_user_by_id($id);
        $data['action'] = 'edit';
        $data['title'] = 'Edit User';
        $data['header'] = 'Edit User';
        $this->layout("User/save", $data);
    }

    function view($id){
        $data['row'] = $this->User->get_user_by_id($id);
        $data['title'] = 'View User';
        $data['header'] = 'View User';
        $this->layout("User/view", $data);
    }

    function delete($id){
        $this->User->delete($id);
        redirect(base_url('Users'));
    }
}