<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Table');

    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data = [];
        $this->layout('Tables/table1', $data);
        //  $this->load->view('Layout/master');
    }

    public function add()
    {
        $data = [];
        $this->layout('Tables/add', $data);
        //  $this->load->view('Layout/master');
    }

    public function view()
    {
        echo 'view';
    }

    public function edit()
    {
        echo 'edit';
    }

    public function delete()
    {
        echo 'delete';
    }



}
