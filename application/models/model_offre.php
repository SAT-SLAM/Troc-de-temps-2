<?php
class model_offre extends CI_Model{

    function getOffres($idLogin){
        $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, idService from offre inner join user on offre.idUser=user.idUser where login=".$idLogin);
        if($query->num_rows()>0){
            return false;
          }
          else{
            return true;
          }
        
    }

    public function setOffre($idOffre, $descriptionOffre, $dateOffre, $idService, $idUser)
    {
        $sql = $this->db->query("insert into offre (idOffre, descriptionOffre, dateOffre, idService, idUser) values ('".$idOffre."', '".$descriptionOffre."', '".$dateOffre."', '".$idService."', '".$idUser."')");
    }
}
?>