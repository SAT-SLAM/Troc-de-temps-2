<!DOCTYPE html>
<html>
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
    <script type="text/javascript" src="../JS/mesFonctions.js"></script>
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
                    <a href="<?php echo base_url('controller_main/AfficherLesUsers'); ?>" class="dropdown-toggle nav-link">
                          Nos utilisateurs
                      </a>
                      </li>
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
            *******
            <a href="<?php echo base_url('controller_main/viewOffre');?>" id="offre">Créer une offre</a>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
            **
             <a href="<?php echo base_url('controller_main/viewDemande');?>" id="demande">Créer une demande</a>
  			</div>
            <div class="tab-pane text-center gallery" id="favorite">
      			***
      		</div>
          </div>

        
            </div>
        </div>
	</div>
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>
</html>