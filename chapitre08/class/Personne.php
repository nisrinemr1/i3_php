<?php 
    class Personne
    {
        // --- proprietés ---
        protected $nom;
        protected $prenom;
        private $dateNaissance;
        private $estFiance = false;
        protected $sexe;

        // --- CONSTRUCTEUR ---
        public function __construct($_nom, $_prenom, $_dateNaissance)
        {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->dateNaissance = $_dateNaissance;
        }

        // --- méthodes ---
        public function sePresenter()
        {
            echo "Je m'appelle $this->prenom $this->nom";
        }
        public function parler($phrase)
        {
            echo $phrase;
        }
        public function donnerAge()
        {
            $age = date_diff(date_create(date("Y-m-d")), date_create($this->dateNaissance));
            echo $age->format('%y');
        }
        public function demanderEnMariage(Personne $_personne)
        {
            // si demandeur != demandé alors
            if($this != $_personne){
                echo "<p>Veux-tu m'épouser " . $_personne->prenom . " ?</p>";
            }
            // sinon erreur
            else {
                echo "<p style='color:red'>Vous ne pouvez pas vous demander en mariage !</p>";
            }
        }
        public function repondreDemandeMariage($_reponse, Personne $_personne){
            echo "La réponse est : " . (($_reponse) ? "oui" : "non") . "<br>";
            // si réponse == true alors
            if($_reponse)
            // propriété fiancé des 2 = true
            {
                // SI P2 EST DéJà FIANCé
                if($this->estFiance){
                    echo "La réponse vérifiée : Désolé, je suis déjà fiancé<br>";
                }
                else{
                    $this->estFiance = true;
                    $_personne->estFiance = true;
                    echo "La réponse vérifiée : Je te dis oui<br>";
                }
                
            }
            else {
                // réponse non
                if($this->estFiance){
                    echo "La réponse vérifiée : Désolé, je suis déjà fiancé<br>";
                }
                else{
                    echo "La réponse vérifiée : C'est non<br>";
                }
            }
            
        }
        public function afficherFiance(){
            if($this->estFiance){
                echo "$this->prenom est fiancé".(($this->sexe=="F"?"e":"")) ."<br>";
            }
            else {
                echo "$this->prenom n'est pas fiancé".(($this->sexe=="F"?"e":"")) ."<br>";
            }
        }
        
        // === getter & setter ===
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
        public function setEstFiance($_estFiance){
            $this->estFiance = $_estFiance;
        }
    }


    
?>