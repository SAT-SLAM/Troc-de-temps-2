<?php
class model_offre extends CI_Model{
    function getOffres($idUser){
        $sql = $this->db->query("select service.nomService, service.photoService, offre.idOffre, offre.descriptionOffre, offre.dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser=".$idUser);
        return $sql->result();
    }

    // function getOffres2($idUser){
    //     $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, offre.idService, idUser from offre inner join service on offre.idService = service.idService where idUser= ".$idUser);
    //      return $sql->result();
    //  }
    
    function getLesServices()
    {
    $sql = $this->db->query("select idService, nomService from service");
    return $sql->result();
    }


    function insertOffre($idOffre, $descriptionOffre, $dateOffre, $idService, $idUser)
    {

        $sql = $this->db->query("insert into offre (idOffre, descriptionOffre, dateOffre, idService, idUser) values ('".$idOffre."', '".$descriptionOffre."', '".$dateOffre."', '".$idService."', '".$idUser."')");
    }
    
    
}
?>