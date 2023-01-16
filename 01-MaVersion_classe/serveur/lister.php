<?php
 require_once('includes/donnees.inc.php');
 require_once('includes/utilitaires.inc.php');
?>

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
  <div class="container">
    <?php
        $rep = <<<REPONSE
        <div class="table-responsive">
            <table class="table table-dark table-striped table-sm align-middle">
                <thead>
                    <tr>
                    <th>Titre</th>
                    <th>Réalisateur</th>
                    <th>Durée</th>
                    </tr>
                </thead>
                <tbody>
        REPONSE;
        global $films;
        $liste = $films->getFilms();
        foreach($liste as $tab){
            $titre = $tab->getTitre();
            $res = $tab->getRes();
            $duree = $tab->getDuree();
            $rep .= <<<SUITE_REPONSE
                <tr>
                    <td>$titre</td>
                    <td>$res</td>
                    <td>$duree</td>
                </tr>
            SUITE_REPONSE;
        }
        $rep .= "</tbody></table>";
        echo $rep;
    ?>
    <br> <a href="../index.html">Retour à la page d'accueil</a> 
    </div>
</body>
</html>