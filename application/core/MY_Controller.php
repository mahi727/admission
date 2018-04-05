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


    public function layout($view_locator, $data = null, $return = false)
    {
        $title = (isset($data['title']) ? $data['title'] : 'Home');
        $headline = (isset($data['headline']) ? $data['headline'] : 'Table');
        if ($return) {
            return $this->load->view('Layout/master', ['content' => $this->load->view($view_locator, $data, true), 'title' => $title, 'headline' => $headline]);
        } else {
            $this->load->view('Layout/master', ['content' => $this->load->view($view_locator, $data, true), 'title' => $title, 'headline' => $headline]);
        }
    }

    public  function pr($data){
        echo '<pre>';
        print_r($data); die;
    }
}


