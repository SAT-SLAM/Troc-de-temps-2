<?php
class model_connexion extends CI_Model {
    
    public function connexion_user($login,$mdp){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('login', $login);
        $this->db->where('mdp', $mdp);

        if($query=$this->db->get()){
            return $query->row_array();
        }
        else{
            return false;
        }
    }  
}
?>