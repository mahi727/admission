<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Authentications extends  MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data = $cond = [];
        $this->layout("Authentications/login", $data);
    }

    function registration(){
        $data = [];
        $this->layout("Authentications/registration", $data);
    }

    function view(){
        $data = $cond = [];
        $this->layout("Authentications/view", $data);
    }


}