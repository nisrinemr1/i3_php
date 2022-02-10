<?php 
    require_once("Personne.php"); // permet d'inclure une fois la classe
    class Homme extends Personne {
        // --- propriété ---
        private $longueurBarbe = 3;
        protected $sexe = "M";
        // --- methodes ---
        public function seRaser(){
            $this->longueurBarbe = 0;
            $this->nom = "XXX";
        }
        public function getLongueurBarbe(){
            return $this->longueurBarbe;
        }
        public function sePresenter()
        {
            echo "Je m'appelle $this->prenom $this->nom et je suis un homme<br>";
        }
    }
    
?>