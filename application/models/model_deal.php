<?php
class model_deal extends CI_Model{
    function getDeals($idUser){
        $sql = $this->db->query("select nomUser, photoUser, nomService, dateDeal, noteUser1, noteUser2, idEtat from deal inner join offre on deal.idOffreUser2=offre.idOffre inner join service on service.idService=offre.idService inner join user on user.idUser=offre.idUser where idCreateur =".$idUser);
        return $sql->result();
    }

}
?>