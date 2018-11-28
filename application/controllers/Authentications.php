<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Authentications extends  MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Authentication');
    }
    function index(){
        $data = $cond = [];
        $data['title'] = 'PGDIT Admission';
        $data['header'] = '';
        $this->layout("Authentications/login", $data);
    }

    function registration(){
        $data = [];
        $data['title'] = 'Registration';
        $data['header'] = '';
        $this->layout("Authentications/registration", $data);
    }

    function change_password(){
        $data = [];
        $this->layout("Authentications/change_password", $data);
    }




}