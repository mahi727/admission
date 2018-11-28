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
        $this->load->model('Notice');
    }

    function index(){
        $data = $cond = [];
        $data['title'] = 'Notice';
        $data['header'] = 'Registration';
        $this->layout("Notices/index", $data);
    }






}