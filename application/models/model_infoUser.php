<?php
class model_infoUser extends CI_model{
    function getUser($idLogin){
        $sql = $this->db->query("select idUser, nomUser, login, mdp, photoUser from user where idUser=$idLogin");
        return $sql->result();
    }

    public function verification_login($login){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('login',$login);
        $query=$this->db->get();
      
        if($query->num_rows()>0){
          return false;
        }
        else{
          return true;
        }
      
      }

      public function getUser2($login)
    {
        $sql = $this->db->query("select idUser from user where login = '".$login."'");
        return $sql->result();
    }

    public function setUser($nomUser, $sexe, $email, $dateNaissance, $login, $mdp, $photoUser)
    {
        $sql = $this->db->query("insert into user (nomUser, sexe, email, dateNaissance, login, mdp, photoUser) values ('".$nomUser."', '".$sexe."', '".$email."', '".$dateNaissance."', '".$login."', '".$mdp."', '".$photoUser."')");
    }




}






?>