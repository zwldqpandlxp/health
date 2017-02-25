<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{
    public function get_by_name($username){
        return $this->db->get_where('health_user',array(
            'user_Name'=>$username
        ))->row();
    }
    public function save($username,$password){
        $this->db->insert("health_user",array(
            'user_Name'=>$username,
            'user_Pwd'=>$password
        ));
        return $this->db->affected_rows();
    }
    public function get_by_name_pwd($name, $pwd){
        //$this -> db -> query("select * from t_user where username='$name' and password='$pwd'");//有sql注入危险
        return $this -> db -> get_where('health_user', array(
            'user_Name' => $name,
            'user_Pwd' => $pwd
        )) -> row(); // result();
    }
}