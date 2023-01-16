<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="stylesheet" href="../client/utilitaires/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client/css/style.css">
    <script src="../client/utilitaires/jquery-3.6.3.min.js"></script>
    <script src="../client/utilitaires/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="../client/js/global.js"></script>
</head>
</body>

        <?php
            $sort = $_POST['sort'];        
            $titre = $_POST['titre'];
            $res = "";
            $duree = 0;
            
            $ficFilms = fopen("donnees/films.txt","r");

            $ligne = fgets($ficFilms);
            while(!feof($ficFilms)){
                $tab = explode(";", $ligne);
                if($tab[0] == $titre){
                    if($sort == 'modifier'){
                        $rep = <<<REPONSE
                        <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <span id="msgErr"></span>
                        <form class="row g-3"action="modifier.php" method="POST" onSubmit="return validerForm();">
                        <div class="col-md-12">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control is-valid" id="titre" name="titre" value=$tab[0]>
                        </div>
                        <div class="col-md-12">
                            <label for="res" class="form-label">Réalisateur</label>
                            <input type="text" class="form-control is-valid" id="res" name="res"  value=$tab[1]>
                        </div>
                        <div class="col-md-12">
                            <label for="duree" class="form-label">Durée</label>
                            <input type="number" min=30 max=240 class="form-control is-valid" id="duree" name="duree"  value=$tab[2]>
                        </div>
                        <br/>
                        <div class="col-6">
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-danger" type="reset">Vider</button>
                        </div>
                        "</form></div></div></div>"
                        REPONSE;
                    }else{
                        
                        $rep =<<<REPONSE
                        <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Suprimer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <span id="msgErrEnreg"></span>
                        <form class="row g-3" action="suprimer.php" method="POST">
                        <div class="col-md-12">
                        <label for="titre" class="form-label">Voulez-vous suprimer le film $titre</label>
                        <input type="hidden" id="titre" name="titre" value=$titre>    
                        </div>
                        <br/>
                        <div class="col-6">
                            <button class="btn btn-primary" type="submit" id="btnOui" name="btnOui">Oui</button>
                            <button class="btn btn-primary" type="submit" id="btnNon" name="btnNon">Non</button>
                        </div>
                        "</form></div></div></div>"
                      REPONSE;
                    }
                    break;
                }else{
                    $ligne = fgets($ficFilms);
                }
            }
            fclose($ficFilms);
            if($rep == ""){
                echo $titre." n'existe pas";
            }else{
                echo $rep;
            }
                    
            ?>
    <br>
    <a href="../index.html">Retour à la page d'accueil</a> 
</body>
</html>