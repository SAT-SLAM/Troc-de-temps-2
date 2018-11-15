<?php
class model_demande extends CI_Model{
    function getDemandes($idUser){
        $sql = $this->db->query("select service.nomService, service.photoService, demande.idDemande, demande.descriptionDemande, demande.dateDemande, demande.idService, idUser from demande inner join service on demande.idService = service.idService where idUser=".$idUser);
        return $sql->result();
    }
    
}
?>