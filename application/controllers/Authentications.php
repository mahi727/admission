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




    function view(){
        $data = $cond = $this->input->post();
        $data['users'] = $this->User->get_user_list($cond);
        $data['title'] = 'User';
        $data['header'] = 'User List';
        $this->layout("User/view", $data);
    }


}