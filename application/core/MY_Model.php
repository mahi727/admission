<?php
/**
 * Created by PhpStorm.
 * User: Saiful
 * Date: 3/29/2018
 * Time: 11:44 AM
 */

class MY_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function date_to_d_m_Y($Y_m_d)
    {
        return (!empty($Y_m_d)) ? date("d-m-Y", strtotime($Y_m_d)) : NULL;
    }

    function date_to_Y_m_d($d_m_Y)
    {
        return (!empty($d_m_Y)) ? date("Y-m-d", strtotime($d_m_Y)) : NULL;
    }
}