<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:18 PM
 */

class Status extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function index(){
        $data = $cond = [];
        $this->layout("Status/dashboard", $data);
    }

    function status(){
        $data = [];
        $this->layout("Status/status", $data);
    }

}