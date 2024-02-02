<?php 
abstract class Article {
    public $id;
    public $titre;
    public $contenu;
    public $date_de_publication;

    
    public function __construct($id, $titre, $contenu, $date_de_publication) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date_de_publication = $date_de_publication;
        
    }
}