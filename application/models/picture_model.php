<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Picture_model extends CI_Model{
    public function Carousel(){
        $sql="select pict_Url,pict_Introduce from health_picture WHERE pict_Local='Carousel'";
        return $this->db->query($sql)->result();
    }
}