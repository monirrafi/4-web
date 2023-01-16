<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple</title>
    <link rel="stylesheet" href="../client/utilitaires/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client/css/style.css">
    <script src="../client/utilitaires/jquery-3.6.3.min.js"></script>
    <script src="../client/utilitaires/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <script src="../client/js/global.js"></script>
</head>
<body>
    <h2>SUPRESSION D'UN FILM</h2> 
<?php
        $titre = $_POST['titre'];
        if(array_key_exists('btnOui', $_POST)) {
            $ligne = 0;
            $i=0;

            $ficFilmsRead = fopen("donnees/films.txt","r");
            $ligneRead = fgets($ficFilmsRead);
            while(!feof($ficFilmsRead)){
                $tab = explode(";", $ligneRead);
                if($tab[0]==$titre){
                    $ligne=$i;
                    break;
                }
                $i= $i+1;
                $ligneRead = fgets($ficFilmsRead);
            }    
            fclose($ficFilmsRead);

            $file_content = file("donnees/films.txt");
            unset($file_content[$ligne]); /* On supprime la ligne par exemple */
            $fh = fopen("donnees/films.txt","w");
            foreach($file_content as $line)
            {
            fputs($fh, $line);
            }
            fclose($fh);
            echo "Film ".$titre." a été bien suprimé";
        }
        else if(array_key_exists('btnNon', $_POST)) {
            echo "Film ".$titre." n'a pas été bien suprimé";
        }

?>

    <br>
    <a href="../index.html">Retour à la page d'accueil</a> 
</body>
</html>