<?php
    class Film
    {
        public $titre;
        public $res;
        public $duree;
    }
    
    $film1 = new Film();
    $film1->titre = 'Titanic';
    $film1->res = 'James Cameroun';
    $film1->duree = 120;
    $film2 = new Film();
    $film2->titre = 'the birds';
    $film2->res = 'Alfred Hitchkok';
    $film2->duree = 119;
    $films = array($film1, $film2);
?>
