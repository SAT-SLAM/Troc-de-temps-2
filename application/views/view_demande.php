<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Création d'une demande</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="./JS/mesFonctions.js"></script>
    <link rel="stylesheet" href="../CSS/offreDemande.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </head>
    <body>
        <body id="LoginForm">
            <div class="container">
                <h1 class="form-heading">Création d'une demande</h1>
                    <div class="login-form">
                        <div class="main-div">
                            <div class="panel">
                                <h2>Votre nouvelle demande</h2>
                                <br>
                                <br>
                            </div>
                            <form id="signin" role="form" method="post" action="<?php echo base_url('controller_main/setInscription'); ?>">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomUser" name="nomUser" placeholder="Nom et prénom" checked required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" checked required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" checked required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="login" name="login" placeholder="login" checked required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="photoUser" name="photoUser" placeholder="URL de votre image" required>
                                </div>
                                    <button type="submit" class="btn btn-primary" id="inscription">Ajouter l'offre</button>
                                </form>
                            </div>
                    </div></div></div>

        </body>
</html>