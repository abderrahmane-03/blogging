<?php 
class Utilisateur {
    public $id;
    public $nom_utilisateur;
    public $email;
    public $mot_de_passe;

    
    public function __construct($identifiant, $nom_utilisateur, $email, $mot_de_passe) {
        $this->id = $identifiant;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
    }
}

$utilisateur1 = new Utilisateur(1, "test", "test@example.com", "123");




