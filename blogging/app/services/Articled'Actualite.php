<?php 

class ArticledeActualite extends Article {
    private $source;

    public function __construct($id, $titre, $contenu, $date_de_publication, $source) {
        parent::__construct($id, $titre, $contenu, $date_de_publication);
        $this->source = $source;
    }
    public function afficherDetails() {
        echo "Actualité '$this->titre' provenant de la source '$this->source'.<br>";
        echo "Contenu: $this->contenu<br>";
        echo "Date de publication: $this->date_de_publication<br>";
    }
}