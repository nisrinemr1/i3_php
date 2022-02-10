<?php 
    class Personne
    {
        //----proprietés----
        protected $nom = "Cookie";
        private $prenom = "Marshmallow";
        private $dateNaissance = "2000/02/23";
        private $estFiance = true;

        

        public function __construct($_nom, $_prenom, $_dateNaissance) {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->dateNaissance = $_dateNaissance;
        }

        //----méthode-----
        public function sePresenter()
        {
            echo "<p>Je m'appelle " . $this->prenom . " " . $this->nom ."</p>";
        }
        public function parler($phrase)
        {
            echo "<p>$phrase</p>" ;
        }
        public function donnerAge()
        {
            $age = date_diff(date_create(date("Y-m-d")), date_create($this->dateNaissance));
            echo $age->format('%y');
        }
        public function demanderEnMariage(Personne $_personne) {
            //Si le demandeur != demandé
            if($this!= $_personne){
                echo "<p>Veux-tu m'épouser " . $_personne->prenom . " ?</p>";
            }
            else{
                echo "<p style ='color: red'>vous ne pouvez pas vous demander en mariage!";
            }
        }
        public function afficherFiance(Personne $_personne) {
            //Si le demandeur != demandé
            if($this->estFiance == false){
                echo "<p>Réponse de " . $_personne->prenom . " est: oui</p>";
                $this->estFiance == true;
                $_personne->estFiance == true;
            }
            
            else{
                echo "<p>Réponse de " . $_personne->prenom . " est: non</p>";
            }
        }
        public function statusApresDemande(Personne $_personne){
            if($this->estFiance == true){
                echo "<p> " . $_personne->prenom . " n'est pas fiancé.</p>"; 
            }
            else{
                echo "<p> " . $_personne->prenom . " est fiancé.</p>";
            }
        }

        //getter et setter
        public function getNom(){
            return $this->nom;
        }
        public function setNom($_nom){
            $this->nom = $_nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($_prenom){
            $this->prenom = $_prenom;
        }
        public function getDateNaissance(){
            return $this->dateNaissance;
        }
        public function setDateNaissance($_dateNaissance){ 
            $this->dateNaissance = $_dateNaissance;
        } 
        public function getEstCelibataire(Personne $_prenom){
            $this->estCelibataire = true; 
        }
    



       /*  public function demanderEnMariage3(Personne $_personne) {
            if($this->$_personne === $this->$_personne){
                echo "Vous ne pouvez pas vous demander en mariage!";
            }
            else{
                echo "<p>Veux-tu m'épouser " . $_personne->prenom . " ?</p>";
            }
        } */

    }
    

?>