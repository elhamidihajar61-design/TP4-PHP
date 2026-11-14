<?php
class Voiture {
    
   public function __construct(
    public string $couleur = "Blanche",
    public int $vitesse = 0
) {} 
    
    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();              
$v2 = new Voiture("Rouge", 50); 
$v3 = new Voiture("Noire");  
$v4 = new Voiture(120); 
$v1->afficher();
$v2->afficher();
$v3->afficher();
$v4->afficher();
