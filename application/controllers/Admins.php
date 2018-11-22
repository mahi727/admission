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

}