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

    public function viewAccueil(){
        $this->load->view('view_accueil');
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
          $this->load->model('model_offre');
          $data["lesOffres"]=$this->model_offre->getOffres($_SESSION['idUser']);
          $this->load->model('model_demande');
          $data["lesDemandes"]=$this->model_demande->getDemandes($_SESSION['idUser']);
          $this->load->model('model_deal');
          $data["lesDeals"]=$this->model_deal->getDeals($_SESSION['idUser']);
          $data["lesDeals2"]=$this->model_deal->getDeals2($_SESSION['idUser']);
          
          //fonction Sacha
          $this->load->model('model_users');
          $data["lesUsers"]=$this->model_users->getUsers();
          $this->load->view('view_accueil', $data);
          
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

    // Offres et Demandes (affichage, création, modification)

    public function viewOffre(){
        $this->load->model('model_offre');
        $data['lesServices'] = $this->model_offre->getLesServices();
        $this->load->view('view_offre', $data);
    }
    public function viewDemande(){
        $this->load->model('model_offre');
        $data['lesServices'] = $this->model_offre->getLesServices();
        $this->load->view('view_demande', $data);
    }

    public function newOffre() {
        $this->load->model("model_offre");  
        $nouvelle_offre = array('descriptionOffre'=>$this->input->post('descriptionOffre'), 'dateOffre'=>$this->input->post('dateOffre'), 'idService'=>$this->input->post('idService'), 'idUser'=>$_SESSION['idUser']);
        print_r($nouvelle_offre);

        if(!empty($nouvelle_offre)){
            $this->load->model("model_offre");
            $this->model_offre->getLesServices();
            $this->model_offre->insertOffre($nouvelle_offre);
            redirect('controller_main/session');
        }
        else{
            echo "erreur";
        }
    }

    public function newDemande(){
        $this->load->model("model_demande");
        $nouvelle_demande = array('descriptionDemande'=>$this->input->post('descriptionDemande'), 'dateDemande'=>$this->input->post('dateDemande'), 'idService'=>$this->input->post('idService'), 'idUser'=>$_SESSION['idUser']);
        print_r($nouvelle_demande);

        if(!empty($nouvelle_demande)){
            $this->load->model("model_demande");
            $this->model_demande->getLesServices();
            $this->model_demande->insertDemande($nouvelle_demande);
            redirect('controller_main/session');
        }
        else{
            echo "erreur";
        }
    }
}
?>