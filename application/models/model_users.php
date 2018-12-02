<?php

class model_users extends CI_Model
{
     public function getUsers()
     {  
        $sql = $this->db->query("select idUser, nomUser, photoUser, sexe from user");
        return $sql->result();
    }
    
}
?>