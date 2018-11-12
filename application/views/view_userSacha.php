<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tous les utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="accueil.css" />
    <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../JS/mesFonctions.js"></script>
</head>
<body>
    <div id='divUser'></div>
    <?php
    foreach($lesUsers as $unUser)
    {
        ?>
        <div class="avatar">

	    <img src="<?php echo $unUser->photoUser ?>" class="img-raised rounded-circle img-fluid">
        
                            </div>
        <?php
        
        
        echo "<p>".$unUser->idUser."</p>";
        echo "<p>".$unUser->nomUser."</p>";
        if ($unUser->sexe == 0){
            echo  '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836938365.png" />';
           
          }
           else {
             echo '<img src="https://nsa39.casimages.com/img/2018/10/17/mini_181017020836876248.png" />';
           }
        }
     ?>
     
     <p class="text-muted">
 </p>
</div>
</body>
</html>