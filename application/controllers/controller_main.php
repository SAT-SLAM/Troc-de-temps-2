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
          $this->load->view("view_erreurco");
        }
        
}

    public function deconnexion(){
        $this->session->sess_destroy();
        redirect('controller_main/index', 'refresh');
    }

    public function setInscription()
    {
        $this->load->model("model_infoUser");
        $data["user"] = $this->model_infoUser->getUser2($_POST["login"]);
        if ($data["user"] == null)
        {
            $this->model_infoUser->setUser($_POST["nomUser"], $_POST["sexe"], $_POST["email"], $_POST["dateNaissance"], $_POST["login"], $_POST["mdp"], $_POST["photoUser"]);
            $data["nomUser"] = $_POST["nomUser"];
            $data["sexe"] = $_POST["sexe"];
            $data["email"] = $_POST["email"];
            $data["dateNaissance"] = $_POST["dateNaissance"];
            $data["login"] = $_POST["login"];
            $data["mdp"] = $_POST["mdp"];
            $data["photoUser"] = $_POST["photoUser"];
            $this->load->view("view_connexion", $data);
        }
    }
    //fonction sacha

    public function AfficherLesUsers()
    {
        $this->load->model('model_users');
        $data['lesUsers']=$this->model_users->getUsers();
        $this->load->view('view_userSacha',$data);
    }
    
    // Offres (affichage, création, modification)

    public function viewOffre(){
        $this->load->model('Model_service');
        $data['lesServices'] = $this->Model_service->getAllServices();
        $this->load->view('view_offre', $data);
    }
    public function viewDemande(){
        $this->load->model('Model_service');
        $data['lesServices'] = $this->Model_service->getAllServices();
        $this->load->view('view_demande', $data);
    }

    public function setOffre()
    {
        $this->load->model("model_offre");
        $data["user"] = $this->model_offre->getUser2($_POST["login"]);
        if ($data["user"] == null)
        {
            $this->model_infoUser->setUser($_POST["nomUser"], $_POST["sexe"], $_POST["email"], $_POST["dateNaissance"], $_POST["login"], $_POST["mdp"], $_POST["photoUser"]);
            $data["nomUser"] = $_POST["nomUser"];
            $data["sexe"] = $_POST["sexe"];
            $data["email"] = $_POST["email"];
            $data["dateNaissance"] = $_POST["dateNaissance"];
            $data["login"] = $_POST["login"];
            $data["mdp"] = $_POST["mdp"];
            $data["photoUser"] = $_POST["photoUser"];
            $this->load->view("view_connexion", $data);
        }
    }

}
?>