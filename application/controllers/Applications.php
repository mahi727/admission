<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:18 PM
 */

class Applications extends MY_Controller
{
    function __construct()
    {
        parent::__construct();


    }


    function index(){
        $data = $cond = [];

        $this->layout("Applications/form", $data);
    }

    function add(){

        $data = [];

        $this->layout("Applications/add", $data);
    }


    function view($id){
        $data['row'] = [];

        $this->layout("Applications/view", $data);
    }





}