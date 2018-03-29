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
        $data = $this->db->query("SELECT * FROM `books_details`");
        if ($data->num_rows() > 0) {
            return $data->result();
        } else {
            return false;
        }
    }

    public function insert_data()
    {
        $book_name = $this->input->post('bookName');
        $auth_name = $this->input->post('authName');
        $date = $this->input->post('publish_date');
        $this->db->query("INSERT INTO `books_details` (book_name,auth_name,publish_date) VALUES ('$book_name','$auth_name','$date')");

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

}