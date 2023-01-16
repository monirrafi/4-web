<?php
    class Films{
        public $films= array();

        public function __construct($films)
        {
            $this->films = $films;
        }
        
        function setFilms($films){
            $this->films = $films;
        }

        function getFilms(){
            return $this->films;
        }
        function enregistrerFilm($film){
            $temp = $this->films;
            array_push($temp,$film);
            $this->setFilms($temp);
        }


    }

?>
