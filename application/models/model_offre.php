<?php
class model_offre extends CI_Model{

    function afficherLesOffres($user)
        {
            $sql = $this->db->query("select idOffre, descriptionOffre, dateOffre, idService from offre where idUser=".$user);
            return $sql->result();
        }

}



?>