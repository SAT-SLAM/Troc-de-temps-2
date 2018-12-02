<!DOCTYPE html>
<html>
<title>Page de profil</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    

    <link rel="stylesheet" href="../CSS/accueil.css">
    <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="..//JS/accueil.js"></script>

</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" >SAT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                      <li class="dropdown nav-item">
                      <a href="deconnexion" class="dropdown-toggle nav-link">
                          Déconnexion
                      </a>
                      </li>
    </nav>
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="<?php echo $photoUser ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
	                        <div class="name">
	                            <h3 class="title"><?php echo $nomUser ?></h3>
	                        </div>
	                    </div>
    	            </div>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  Mes offres
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">palette</i>
                                    Mes demandes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    Mes deals
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
            <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
            


            <a href="<?php echo base_url('controller_main/viewOffre');?>" id="offre">Créer une offre</a>
            <br>
            <br>
            <div id="idOffres" class="row align-items-center">
            
                <?php
                foreach($lesOffres as $uneOffre){ ?>
                    <p>
                    <div class='col-md-4'>
                    <div class="card" style="width: auto; height: auto;">
                    <div class="card-header" style="background-color: #e5ccff;">
                        <b>
                            <?php
                            echo $uneOffre->nomService;?>
                            <input type="button" value="+"/>
                            <br>
                            </div>
                        </b>
                    <div class="card-body">
                    <p class="card-subtitle mb-2 text-muted">
                            <?php
                            echo $uneOffre->descriptionOffre;?>
                            </p>
                            <h6 class="card-text">
                            <?php
                            echo $uneOffre->dateOffre;
                        ?>
                        </h6>
                    </div>
                </div>
                <br>
                </div>
                <?php
                }
                ?>
            </div>
                
                
            
  			</div>
            <div class="tab-pane text-center gallery" id="works">
            <a href="<?php echo base_url('controller_main/viewDemande');?>" id="demande">Créer une demande</a>
            <br>
            <br>
            <div id="idDemandes" class="row align-items-center">

            <?php
            foreach($lesDemandes as $uneDemande){ ?>
                <p>
                <div class='col-md-4'>
                    <div class="card" style="width: auto; height: auto;">
                    <div class="card-header" style="background-color: #e5ccff;">
                    <b>
                        <?php
                        echo $uneDemande->nomService;?>
                        <br>
                        </div>
                    </b>
                    <div class="card-body">
                    <p class="card-subtitle mb-2 text-muted">
                        <?php
                        echo $uneDemande->descriptionDemande;?>
                        </p>
                        <h6 class="card-text">
                        <?php
                        echo $uneDemande->dateDemande;?>
                </h6>
                </div>
                </div>
                </div>
                
                <?php
                }
                ?>
            </div>
            </div>
             
  		
            <div class="tab-pane text-center gallery" id="favorite">
            <br>
            <br>
            <div id="idDemandes" class="row align-items-center">
                <?php
                foreach($lesDeals as $unDeal){ ?>
                    <p>
                    <div class='col-md-4'>
                    <div class="card" style="width: auto; height: auto;">
                    <div class="card-header"
                    <?php
                                if($unDeal->idEtat == 1){
                                  echo '<div style = "background-color: #ffcccc;">';
                                }
                                else{
                                    echo '<div style = "background-color: #ccffcc;">';
                                }
                            
                            
                            ?>
                    
                        <img class="userDeal" src="<?php echo $unDeal->photoUser?>">
                        <b>
                            <?php
                            echo $unDeal->nomUser;?>
                            <br>
                        </b>
                        </div>
                        <div class="card-body">
                        <p class="card-subtitle mb-2 text-muted">
                            <?php
                            echo $unDeal->nomService;?>
                            <br>
                            /
                            <br>
                            <?php 
                            echo $lesDeals2[0]->nomService2 ?>
                            <br>
                            <?php
                            echo $unDeal->dateDeal;?>
                            <br>
                            <?php
                            echo $unDeal->noteUser1;?>
                            -
                            <?php
                            echo $unDeal->noteUser2;?>
                    </p>
                    </p>
                    </div>
                    </div>
                    </div>
                    <?php
                    }
                ?>
      		</div>
              </div>
          </div>
            </div>
        </div>
	</div>
        <!-- fonction Sacha -->
    <footer>
    <h2 class="section-heading text-uppercase">Nos incroyables utilisateurs !</h2>
    <section class="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <br>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
        <?php
              foreach($lesUsers as $unUser){

              ?>
          <div class="col-sm-4">
            <div class="team-member1">
              <img class="listeUsers" src="<?php echo $unUser->photoUser?>"/>
              <div class="team-member">
                <h4>
                <br>
                  <?php
                    echo "<option value='" .$unUser->idUser. "'>".$unUser->nomUser."</option>";
                  ?>
                    </div>
                </h4>
            </div>
                  <div class="team-member">
                  <?php
                       if ($unUser->sexe == 0){
                         echo  '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836938365.png" height=25px />';
                        
                       }
                        else
                          echo '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836876248.png" height=30px />';

                  ?>
                  </div>
                  <p class="text-muted">
              </p>
          </div>
          <?php
              }
          ?>
        </div>
      </div>
    </section>
    
    </footer>
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>
</html>