<?php
class VHub_model extends CI_Model { 

public function __construct() {
$this->load->database();  
}
public function addregister($data) { 
$this->db->insert('register',$data);
} 
public function addvideo($data) { 
$this->db->insert('vedio',$data);
}
}
?>