<?php
require_once 'config.php';
if (file_exists('classes/Tache.php')) {
    require 'classes/Tache.php';
} else {
    echo "Error: Tache.php file not found.<br>";
}
if (file_exists('classes/Bug.php')) {
    require 'classes/Bug.php';
} else {
    echo "Error: Bug.php file not found.<br>";
}
require_once 'classes/Feature.php';

// Exemple d'utilisation
$tache = new Tache("Acheter du pain", "Aller à la boulangerie pour acheter du pain");
$bug = new Bug("Erreur 404", "Page non trouvée", "haute");
$feature = new Feature("Ajouter un chat en direct", "Permettre aux utilisateurs de discuter en temps réel", "moyenne");

echo "Tâche: " . $tache->getTitre() . " - " . $tache->getStatut() . "<br>";
echo "Bug: " . $bug->getTitre() . " - Sévérité: " . $bug->getSeverity() . "<br>";
echo "Feature: " . $feature->getTitre() . " - Priorité: " . $feature->getPriority() . "<br>";
?>
