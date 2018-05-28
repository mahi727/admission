<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 5/27/2018
 * Time: 1:06 PM
 */

class Pages extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Book');
    }

    function url_encrypt(){
            $url_string = "";
            foreach ($_POST as $key => $value) {
                if ($key != 'url') {
                    if (!empty($value)) {
                        $url_string .= $key . "=" . $value . "~";
                    }
                }
            }
            $url_string = $this->sdf_encrypt(rtrim($url_string, "~"));
            redirect('/' . $_POST['url'] . '/' . $url_string);

    }
}