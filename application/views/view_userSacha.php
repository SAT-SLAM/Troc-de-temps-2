<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tous les utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/accueil.css">
    <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../JS/mesFonctions.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>CSS/agency.min.css" rel="stylesheet">
</head>
<body>
<?php
              foreach($lesUsers as $unUser){

              ?>
          <div class="col-sm-4">
            <div class="team-member1">
              <img class="mx-auto rounded-circle" src="<?php echo $unUser->photoUser?>">
              <div class="team-member">
                <h4>
                  <?php
                    echo "<option value='" .$unUser->idUser. "'>".$unUser->nomUser."</option>";
                  ?>
                  <br>
                    </div>
                </h4>
            </div>
                  <div class="team-member">
                  <?php
                       if ($unUser->sexe == 0){
                         echo  '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836938365.png" />';
                        
                       }
                        else
                          echo '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836876248.png" />';

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
</body>
</html>
