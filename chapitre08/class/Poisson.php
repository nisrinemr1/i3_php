<?php 
    class Poisson {
        //--propriétés
        public $nom;
        public $couleur;
        public $poids;
        
        // -- constructeur
        public function __construct($_nom,$_couleur,$_poids){
            $this->nom = $_nom;
            $this->couleur = $_couleur;
            $this->poids = $_poids;
        }
        // -- méthodes manger =)
        public function sePresenter()
        {
            echo "Je suis $this->nom je suis de couleur $this->couleur et pèse $this->poids kg.<br>";
        }
        public function manger(Poisson $_poisson){
            echo "$this->nom mange le $_poisson->nom <br>";

            //mettre à jour les poids 
            $this->poids += $_poisson->poids;
            $_poisson->poids = 0;
        }

        public function seRePresenter(){
            echo "Le nouveau poids du  $this->nom est : $this->poids kg <br>";
        }
        // getter & setter
    }
?>