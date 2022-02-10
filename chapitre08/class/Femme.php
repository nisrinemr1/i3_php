<?php 
    require_once("Personne.php");
    class Femme extends Personne{
        // --- propriété ---
        private $estEnceinte = false;
        private $nbEnfants = 0;
        protected $sexe = "F";
        // --- méthodes ---
        public function accoucher(){
            // vérifier qu'elle est enceinte pour accoucher
            if($this->estEnceinte){
                echo "J'accouche de " . $this->nbEnfants ." enfant(s)<br>";
                for ($i=0; $i < $this->nbEnfants; $i++) { 
                    $this->sexeEnfant();
                }
                
                $this->estEnceinte=false;
                
            }
            
            // sinon message d'erreur
            else {
                echo "Je ne peux pas accoucher car je ne suis pas enceinte<br>";
            }
        }
        public function setEnceinte($nbEnfants){
            $this->estEnceinte=true;
            $this->nbEnfants = $nbEnfants;
        }
        public function getEstEnceinte(){
            return $this->estEnceinte;
        }
        public function afficheEstEnceinte(){
            if($this->estEnceinte){
                echo "Je suis enceinte<br>";
            }
            else {
                echo "Je ne suis pas enceinte<br>";
            }
        }
        private function sexeEnfant(){
            // générer le sexe de l'enfant
            // random
            if(rand(0,1)== 0){
                echo "<p style='color:blue'>C'est un garçon</p>";
            }
            else {
                echo "<p style='color:red'>C'est une fille</p>";
            }
        }
        public function sePresenter()
        {
            echo "Je m'appelle $this->prenom $this->nom et je suis une femme<br>";
        }
    }
?>