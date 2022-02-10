<?php 
    require_once("Personne.php"); // permet d'inclure une fois la classe 
    class Femme extends Personne {
            private $estEnceinte = false;
            private $nbEnfants = 0;
            
        
            public function accoucher(){
                  //verifier qu'elle est enceinte pour accoucher 
                  //générer le sexe de l'enfant 
                  //random pour l'enfant sinon message d'erreur.
                  if($this->estEnceinte){
                        echo "J'accouche.";
                        if($this->estEnceinte){
                              echo "J'accouche de ".$this->nbEnfants ."enfant(s)<br>";
                              for ($i=0;$i<$this->nbEnfants; $i++){
                                    $this->sexeEnfant();    
                              }
                        }
                        $this->estEnceinte = false;
                  } 
                  else{
                        echo "Je ne peux pas accoucher parce que je ne suis toujours pas enceinte.";
                  }
            }
            public function setEnceinte($nbEnfants){
                  $this->estEnceinte = true;
                  $this->nbEnfants = $nbEnfants;
                  $this->dejaEteEnceinte = true;
            }
            public function getDejaEteEnceinte(){
                        return $this->dejaEteEnceinte;
                  }
            public function getEstEnceinte(){
                  return $this->estEnceinte;
            }
            private function sexeEnfant(){
                  $sexe = rand(0,1);
                 
                        if($sexe == 0){
                              echo "<p style='color:pink'>C'est une fille!</p>";
                        }
                        else{
                              echo "<p style='color:blue'>C'est un garçon!</p>";
                        }
                  

            }
            public function afficheEstEnceinte(){
                  if($this->estEnceinte){
                        echo "<p>Je suis enceinte.</p>";  
                    }
                    else{
                     echo "<p>Je ne suis pas enceinte.</p>";
                    }
            }
    }
  ?>