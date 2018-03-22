<?php
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/21/2018
 * Time: 10:21 AM
 */

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function layout(){
        $this->load->view('Layout/master');

    }

}


