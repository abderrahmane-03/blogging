<?php 

class ArticledeBlog extends Article {
    private $categorie;

    public function __construct($id, $titre, $contenu, $date_de_publication, $categorie) {
        parent::__construct($id, $titre, $contenu, $date_de_publication);
        $this->categorie = $categorie;
    }

    public function afficherDetails() {
        echo "Article de blog '$this->titre' de la catégorie '$this->categorie'.<br>";
        echo "Contenu: $this->contenu<br>";
        echo "Date de publication: $this->date_de_publication<br>";
    }
}
