<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Push_model extends CI_Model{
    public function push_messages(){
        $sql="select push_Title,push_Content,menu_Title,pict_Url from health_push pu,health_menu m,health_picture pi where m.menu_Id=pu.menu_Id and pu.pict_Id=pi.pict_Id";
        return $this->db->query($sql)->result();
    }

}