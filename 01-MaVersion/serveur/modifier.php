<?php
    function tabFilms(){
        $tab = array();
        $ficFilms = fopen("donnees/films.txt","r");
        $ligne = fgets($ficFilms);
        while(!feof($ficFilms)){
            $tab[] = $ligne;
            $ligne = fgets($ficFilms);
        }
        fclose($ficFilms);
        return $tab;

    }
?>
