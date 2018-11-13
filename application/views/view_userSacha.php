<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tous les utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../JS/mesFonctions.js"></script>
	<script src="../JS/jquery.min.js"></script>
	<script src="../JS/jquery.easing.1.3.js"></script>
	<script src="../JS/bootstrap.min.js"></script>
	<script src="../JS/jquery.waypoints.min.js"></script>
	<script src="../JS/owl.carousel.min.js"></script>
	<script src="../JS/jquery.magnific-popup.min.js"></script>
	<script src="../JS/magnific-popup-options.js"></script>
	<script src="../JS/main.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>CSS/agency.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>CSS/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/icomoon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>CSS/style.css">
</head>
<body>
<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" >Nos incroyables utilisateurs</a>
						</div>
					
					</div>
				</div>
			</div>
        </header>
        <div class="row">
        <?php
              foreach($lesUsers as $unUser){

              ?>
		
		<div id="colorlib-blog">
			<div class="container">
				<div class="row text-center">
					
                </div>
                <div class="container">
					<div class="col-md-4">
						<div class="article animate-box">
							<a class="blog-img">
								<img class="img-responsive" src="<?php echo $unUser->photoUser?>">
								<div class="overlay"></div>
								
							</a>
							<div class="desc">
								<span class="meta"> <?php echo "<option value='" .$unUser->idUser. "'>".$unUser->nomUser."</option>"; ?></span>
								<h2><?php
                                     if ($unUser->sexe == 0){
                                         echo  '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836938365.png" />';
                        
                                     }
                                     else
                                         echo '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836876248.png" />';

                                    ?>
                                </h2>
							
							</div>
						</div>
					</div>
                </div>
                <?php
              }
          ?>
		</div>
    </div>
</div>
</body>
</html>
