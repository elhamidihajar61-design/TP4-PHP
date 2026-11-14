# 0.3 : Non, chaque objet a ses propres valeurs. $this change selon l'objet.
# 1.1
## erreur affichee pour "echo $p->cin;"":
Fatal error: Uncaught Error: Cannot access private property Personne::$cin in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php:44 Stack trace: #0 {main} thrown in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php on line 44
## erreur affichee pour "echo $p->dateNaissance;"
Fatal error: Uncaught Error: Cannot access private property Personne::$dateNaissance in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php:44 Stack trace: #0 {main} thrown in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php on line 44
## erreur affichee pour "echo $p->getAge;"
Fatal error: Uncaught Error: Call to private method Personne::getAge() from global scope in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php:44 Stack trace: #0 {main} thrown in C:\xampp\htdocs\TP4-PHP\tp-poo\partie1.php on line 44
# 1.2 
Il est dangereux de laisser `cin` en `public` car il va être accessible de partout, on peut le modifier sans contrôle.
# 1.3
`getAge()` est privée, donc elle n'est pas inutile, elle est utile car elle sécurise l'accès. On l'utilise en l'appelant en interne par d'autres méthodes de la classe pour calculer et fournir l'âge en toute sécurité.
# 1.4
Elle devient accessible depuis les classes filles seulement et reste inaccessible depuis le script principal.
## 2.1.a
- `new Voiture("Noire")` : ça marche. $couleur = "Noire" et $vitesse = 0, car la 2ème valeur garde sa valeur par défaut.
- `new Voiture(120)` : 120 est passé au 1er paramètre, donc à $couleur et pas à $vitesse. Sans `strict_types`, PHP convertit 120 en "120" et $vitesse reste 0. Avec `declare(strict_types=1)`, ça donne une Fatal Error : TypeError car on attend un string.
## 2.1.b
Avantage : code plus court, plus lisible et moins d'erreurs de recopie.
## 2.2.a
On obtient une Fatal Error : Cannot redeclare Personne::__construct(). PHP ne supporte pas la surcharge de méthodes, on ne peut pas avoir deux constructeurs avec le même nom dans la même classe.
