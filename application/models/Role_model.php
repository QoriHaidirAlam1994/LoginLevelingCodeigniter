<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function getEditRole($id)
    {
        $query = "SELECT * FROM `user_role` WHERE `user_role`.`id` = '$id'";
        return $this->db->query($query)->row_array();
    }
}
