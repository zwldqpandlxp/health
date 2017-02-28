<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article_model extends CI_Model{
    public function get_articles(){
        $sql="select a.arti_Id,a.arti_Title,a.arti_Content,pi.pict_Url from health_article a,health_picture pi where a.pict_Id = pi.pict_Id";
        return $this->db->query($sql)->result();
    }
    public function forum_content($arti_Id){
        $sql="select a.arti_Title,a.arti_Content,pi.pict_Url from health_article a,health_picture pi where arti_Id='$arti_Id' and pi.pict_Id=a.pict_Id ";
        return $this->db->query($sql)->result();
    }
}