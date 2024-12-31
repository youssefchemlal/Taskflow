<?php
class Tache {
    private $titre;
    private $description;
    private $statut;

    public function __construct($titre, $description) {
        $this->titre = $titre;
        $this->description = $description;
        $this->statut = 'en cours';
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }
}
?>
