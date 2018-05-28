<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 5/27/2018
 * Time: 10:28 AM
 */

class User extends MY_Model
{

    function get_user_list($cond){
        $query_string = "";
        if (isset($cond['first_name']) && !empty($cond['first_name'])) {
            $query_string = " AND `first_name` LIKE '%$cond[first_name]%' ";
        }
        return $this->db->query("SELECT * FROM `users` WHERE 1=1 $query_string")->result_array();
    }

    function add(){
        $data = array(
            'first_name'=> $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email ' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'password' => $this->input->post('password')
        );
        return $this->db->insert('users', $data);
        //return $this->db->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `gender`, `password`) VALUES ('$first_name','$last_name','$email','$gender','$password')");
    }

    function edit($data, $id){
        $row_id = $id;
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $gender = $data['gender'];
        return $this->db->query("UPDATE `users` SET first_name = '$first_name',  last_name = '$last_name', email = '$email', gender = '$gender'  WHERE id = '$row_id' ");
    }

    function get_user_by_id($id){
        return $this->db->query("SELECT * FROM `users` WHERE `id` = '$id'")->row();
    }

    function delete($id){
        $query = $this->db->query("DELETE FROM `users` WHERE `id` = '$id'");
        return$query;
    }
}