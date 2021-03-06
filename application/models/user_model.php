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
            'user_Pwd'=>$password,
            'pict_Id' =>21
        ));
        return $this->db->affected_rows();
    }
    public function get_by_name_pwd($name, $pwd)
    {
        return $this->db->get_where('health_user', array(
            'user_Name' => $name,
            'user_Pwd' => $pwd
        ))->row();
    }
    public function get_users(){
        $sql="select u.user_Name,pi.pict_Url from health_user u,health_article a,health_picture pi where a.user_Id=u.user_Id and u.pict_Id=pi.pict_Id ORDER BY a.arti_Date DESC";
//           $sql="select u.user_Name,pi.pict_Url from health_user u,health_picture pi where pi.pict_Id=u.pict_Id";
        return $this->db->query($sql)->result();
    }
    public function user_by_article($arti_Id){
        $sql="select pi.pict_Url,u.user_Name from health_article a,health_picture pi,health_user u where arti_Id='$arti_Id' and pi.pict_Id=u.pict_Id and u.user_Id=a.user_Id";
        return $this->db->query($sql)->result();
    }
    public function get_headImg_by_pictId($pict_Id){
        $sql = "select * from health_picture where pict_Id = $pict_Id";
        return $this->db->query($sql)->row();
    }
    public function update_pictId_by_userId($user_Id, $pict_Id){
        $this->db->set("pict_Id",$pict_Id);
        $this->db->where("user_Id",$user_Id);
        $this->db->update("health_user");
        return $this->db->affected_rows();
    }
}