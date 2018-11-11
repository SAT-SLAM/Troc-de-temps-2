<?php
class controller_main extends CI_Controller {
    public function __construct(){
        parent::__construct();
              $this->load->helper('url');
              $this->load->library('session');
}
     //Connexion, Session, Déconnexion

    public function index(){
        $this->load->view('view_connexion');
}

    public function viewInscription(){
        $this->load->view('view_inscription');
}

    function connexion(){
        $this->load->model('model_connexion');
        $connexion_user = array('login'=>$this->input->post('login'), 'mdp'=>$this->input->post('mdp'));

        $data = $this->model_connexion->connexion_user($connexion_user['login'], $connexion_user['mdp']);
        if($data){
            $_SESSION['idUser']=$data['idUser'];
            $_SESSION['nomUser']=$data['nomUser'];
            $_SESSION['sexe']=$data['sexe'];
            $_SESSION['email']=$data['email'];
            $_SESSION['dateNaissance']=$data['dateNaissance'];
            $_SESSION['login']=$data['login'];
            $_SESSION['mdp']=$data['mdp'];
            $_SESSION['photoUser']=$data['photoUser'];
            redirect('controller_main/session');
         
            }
            else{
              $this->session->set_flashdata('error_msg',  "Votre login ou votre mot de passe est incorrect");
              $this->load->view("view_connexion");
      
            }

}
    public function session(){

        if(!empty($_SESSION['idUser'])) {
      
          $data["idUser"]=$_SESSION['idUser'];
          $data["nomUser"]=$_SESSION['nomUser'];
          $data["photoUser"]=$_SESSION['photoUser'];
          $this->load->model("model_infoUser");
          $data["users"]=$this->model_infoUser->getUser($_SESSION['idUser']);
          $this->load->view("view_accueil",$data);
        }
        else{
          $this->load->view("erreurco");
        }
        
}

    public function deconnexion(){
        $this->session->sess_destroy();
        redirect('controller_main/index', 'refresh');
    }

    // Offres (affichage, création, modification)

    public function AfficherOffre()
    {
        $this->load->model("model_offre");
		$data["lesOffres"] = $this->model_offre->AfficherLesOffres("1");
    }




}
?>