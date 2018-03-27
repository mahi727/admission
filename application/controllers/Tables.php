<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Table', 'm');

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
        $title =  'Table';
        $data['parsons'] = $this->m->getdata();
      //  print_r($data);
        $this->layout('Tables/table1', $data);
        //  $this->load->view('Layout/master');
    }

    public function add()
    {
        $data = [];
        $this->layout('Tables/add', $data);
        //  $this->load->view('Layout/master');
    }

    public function submit()
    {
        $result = $this->m->submit();
        if($result) {
            $this->session->set_flashdata('success_msg','Data has been successfully added');
        }else{
            $this->session->set_flashdata('error_msg','Sorry! error in ading data');
        }
        redirect(base_url('Tables/add'));
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

/*    public function insert()
    {
        $sql = $this->db->query("
            select * from parson")->result();

        $data = [
            'parsons' => $sql
        ];
        $this->layout('Tables/table1', $data);
    }

    public function adddata()
    {
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');

        $this->db->query("
            insert into parson (first_name,last_name,email) 
            VALUES  ('$first_name,$last_name,$email')");

        redirect('Tables/insert');
    }*/



}
