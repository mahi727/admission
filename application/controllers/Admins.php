<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:18 PM
 */

class Admins extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin');
    }


    function index(){
        $data = $cond = [];

        $this->layout("Admins/admin_login", $data);
    }

    function publish_circular(){
        $data = [];
        $this->layout("Admins/publish_circular", $data);
    }

    function admin_dashboard(){
        $data = [];
        $this->layout("Admins/admin_dashboard", $data);
    }

    function applications(){
        $data = [];
        $this->layout("Admins/applications", $data);
    }

    function admit(){
        $data = [];
        $this->layout("Admins/admit", $data);
    }

    function seat(){
        $data = [];
        $this->layout("Admins/seat", $data);
    }

    function attendance(){
        $data = [];
        $this->layout("Admins/attendance", $data);
    }

    function result(){
        $data = [];
        $this->layout("Admins/result", $data);
    }
}