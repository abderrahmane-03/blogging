<?php 

class Auteur extends Utilisateur {
    private $articles = [];

    public function ecrireArticle($titre, $contenu) {
        $article = ["titre" => $titre, "contenu" => $contenu];
        $this->articles[] = $article;
        echo "L'article '$titre' a été écrit par l'auteur '$this->nom_utilisateur'.<br>";
    }
    public function setMotDePasse($nouveauMotDePasse) {
        parent::setMotDePasse($nouveauMotDePasse);
        echo "Le mot de passe de l'auteur '$this->nom_utilisateur' a été mis à jour.<br>";
    }
}
  
