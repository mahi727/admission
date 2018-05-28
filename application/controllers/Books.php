<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:18 PM
 */

class Books extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Book');

    }


    function index(){
        $data = $cond = $this->input->post();
        $data['books_details'] = $this->Book->get_books_info($cond);
        $data['title'] = 'Book';
        $data['header'] = 'My Books List';
        $this->layout("Books/index", $data);
    }

    function add(){
        if($_POST) {
            $data = $this->input->post();
            if($this->Book->add($data)){
                $this->session->set_flashdata('success',"Data has been succesfully added.");
                redirect('Books');
            }
        }
        $data = [];
        $data['action'] = 'add';
        $data['title'] = 'Add Book';
        $data['header'] = 'Add New Book';
        $this->layout("Books/add", $data);
    }


    function view($id){
        $data['row'] = $this->Book->get_row_by_id($id);
        $data['title'] = 'View Book';
        $data['header'] = 'View Books Information';
        $this->layout("Books/view", $data);
    }

    function edit($id)
    {
        if ($_POST) {
            $data = $this->input->post();
            if ($this->Book->edit( $data, $id)) {
                $this->session->set_flashdata('success',"Data has been succesfully edited.");
                redirect('Books', 'refresh');
            } else {
                $this->session->set_flashdata('error',"Error!!");
                redirect('Books', 'refresh');
            }
        }
        $data['row'] = $this->Book->read($id);
        $data['action'] = 'edit/' .$id;
        $data['title'] = 'Edit Book';
        $data['header'] = 'Edit Book Information';
        $this->layout("Books/add", $data);
    }

    function delete($id)
    {
        if ($this->Book->delete($id)) {
            $this->session->set_flashdata('success', 'success');
            redirect('Books');
        } else {
            $this->session->set_flashdata('error', 'Error!!');
            redirect('Books');
        }
    }



}