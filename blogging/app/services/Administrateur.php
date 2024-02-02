<?php 

class Administrateur extends Utilisateur {
    public function supprimerArticle(Auteur $auteur, $titre) {
        foreach ($auteur->articles as $key => $article) {
            if ($article["titre"] == $titre) {
                unset($auteur->articles[$key]);
                echo "L'article '$titre' a été supprimé par l'administrateur '$this->nom_utilisateur'.<br>";
                
            }
        }
        echo "L'article '$titre' n'a pas été trouvé pour l'auteur '$auteur->nom_utilisateur'.<br>";
    }
}