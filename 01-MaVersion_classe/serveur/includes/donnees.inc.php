<?php
 require_once('includes/utilitaires.inc.php');

?>

<?php
    class Film
    {
        public $titre;
        public $res;
        public $duree;
    
    function setTitre($titre){
        $this->titre = $titre;
     }
     function setRes($res){
        $this->res = $res;
     }
       
     function setDuree($duree){
        $this->duree = $duree;
     }
     function getTitre(){
        return $this->titre;
     }
       
     function getRes(){
        return $this->res;
     }
       
     function getDuree(){
        return $this->duree;
     }
 
    }
    $film1 = new Film();
    $film1->titre = 'Titanic';
    $film1->res = 'James Cameroun';
    $film1->duree = 120;
    $film2 = new Film();
    $film2->titre = 'the birds';
    $film2->res = 'Alfred Hitchkok';
    $film2->duree = 119;

    $temp = array($film1, $film2);
    global $films;
    $films = new Films($temp);


?>
