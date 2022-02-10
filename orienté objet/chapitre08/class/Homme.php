<?php 
      require_once("Personne.php"); // permet d'inclure une fois la classe 
      class Homme extends Personne {
            private $longueurBarbe = 3;
            
            public function seRaser(){
                  $this->longueurBarbe = 0;
                  $this->nom="XX";
            }
            public function getLongueurBarbe(){
                  return $this->longueurBarbe;
            } 
      }
   /* $h1 = new Homme();
   $h1->sePresenter();
   echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>";
   $h1->seRaser();
   $h1->sePresenter();
   echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>"; 
   mettre en comm pour qu'il ne s'affiche pas deux fois dans testhomme*/
?>