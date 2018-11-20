<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:18 PM
 */

class Notices extends MY_Controller
{
    function __construct()
    {
        parent::__construct();


    }


    function index(){
        $data = $cond = [];

        $this->layout("Notices/index", $data);
    }

    function add(){

        $data = [];

        $this->layout("Books/add", $data);
    }


    function view($id){
        $data['row'] = [];

        $this->layout("Books/view", $data);
    }





}