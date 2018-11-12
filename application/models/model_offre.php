<?php
class model_offre extends CI_Model{
    function getOffres($idLogin){
        $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, idService from offre inner join user on offre.idUser=user.idUser where login=".$idLogin);
    }
}
?>