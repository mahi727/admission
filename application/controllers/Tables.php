<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Table');

    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['title'] = 'Table';
        $data['header'] = 'Table';
        $data['parsons'] = $this->Table->getdata();
        $this->layout('Tables/table1', $data);
    }

    public function add()
    {
        $data = [];
        $data['title'] = 'Add Table';
        $data['header'] = 'Add New Parson';
        $this->layout('Tables/add', $data);
    }

    public function submit()
    {
        $result = $this->Table->submit();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Data has been successfully added');
        } else {
            $this->session->set_flashdata('error_msg', 'Sorry! error in data ading');
        }
        redirect(base_url('Tables/index'));
    }


    public function view($id)
    {
        $data['title'] = 'View Table';
        $data['header'] = 'View Parson';
        $data['parson'] = $this->Table->getParsonById($id);
        $this->layout('Tables/view', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Table';
        $data['header'] = 'Edit Parson';
        $data['parson'] = $this->Table->getParsonById($id);
        $this->layout('Tables/edit', $data);
    }

    public function update()
    {
        $result = $this->Table->update();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Data update successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Sorry! error in data updating');
        }
        redirect(base_url('Tables/index'));
    }

    public function delete($id)
    {
        $result = $this->Table->delete($id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Data has been deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Sorry! error in data deleting');
        }
        redirect(base_url('Tables/index'));
    }


}
