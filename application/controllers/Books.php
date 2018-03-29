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
        $data = [];
        $data['title'] = 'Book';
        $data['header'] = 'My Books List';
        $data['books'] = $this->Book->get_books_info();
        $this->layout("Books/index", $data);
    }

    function add(){
        $data = [];
        $data['title'] = 'Add Book';
        $data['header'] = 'Add New Book';
        $this->layout("Books/add", $data);
    }

    function insert_data(){
        $this->Book->insert_data();
        redirect('Books');
    }

    function view(){
        $data = [];
        $data['title'] = 'View Book';
        $data['header'] = 'View Book Information';
        $this->layout("Books/view", $data);
    }

}