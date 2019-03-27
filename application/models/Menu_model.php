<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getEditSub($id)
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
        WHERE `user_sub_menu`.`id` = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function getEditMenu($id)
    {
        $query = "SELECT * FROM `user_menu` WHERE `user_menu`.`id` = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function deleteSubMenu($id)
    {
        $query = $this->db->query("DELETE FROM user_sub_menu WHERE id = '$id'");
    }

    public function deleteMenu($id)
    {
        $query = $this->db->query("DELETE FROM user_menu WHERE id = '$id'");
    }

    public function deleteRole($id)
    {
        $query = $this->db->query("DELETE FROM user_role WHERE id = '$id'");
    }
}
