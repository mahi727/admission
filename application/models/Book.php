<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/28/2018
 * Time: 2:20 PM
 */
class Book extends CI_Model
{
    public function get_books_info()
    {
        return $this->db->query("SELECT * FROM `books_details`")->result_array();
    }

    public function add()
    {
        $book_name = $this->input->post('book_name');
        $auth_name = $this->input->post('auth_name');
        $date = $this->input->post('publish_date');
        return $this->db->query("INSERT INTO `books_details` (book_name,auth_name,publish_date) VALUES ('$book_name','$auth_name','$date')");
    }

    public function get_row_by_id(){
        return $this->db->query("SELECT * FROM `books_details`")->result_array();
    }

    function read()
    {
       return $this->db->query('SELECT * FROM `books_details` WHERE id = 4 ')->row();
    }

    function delete()
    {
        $query = $this->db->query('DELETE FROM `books_details` WHERE id = 2');
        return $query;
    }

}