<?php
require_once 'Tache.php';

class Feature extends Tache {
    private $priority;

    public function __construct($titre, $description, $priority) {
        parent::__construct($titre, $description);
        $this->priority = $priority;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }
}
?>
