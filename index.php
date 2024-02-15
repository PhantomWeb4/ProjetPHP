<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Cartes</title>
<head>
<body>

<?php

$PlayerName = "Adam";

echo "<p> {$PlayerName} </p>" ;
require_once "web.php";
d
$newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
echo "Nouvelle fonction anonyme  : $newfunc\n";
echo $newfunc(2, M_E) . "\n";

namespace Armes;

class FusilDeSniper {
    // Propriétés
    private $modele;
    private $calibre;
    private $porteeMax;
    private $precision;
    private $poids;

    // Constructeur
    public function __construct($modele, $calibre, $porteeMax, $precision, $poids) {
        $this->modele = $modele;
        $this->calibre = $calibre;
        $this->porteeMax = $porteeMax;
        $this->precision = $precision;
        $this->poids = $poids;
    }

    // Méthodes
    public function getModele() {
        return $this->modele;
    }

    public function getCalibre() {
        return $this->calibre;
    }

    public function getPorteeMax() {
        return $this->porteeMax;
    }

    public function getPrecision() {
        return $this->precision;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function tirer() {
        // Logique de tir
        echo "Tir effectué avec le fusil de sniper {$this->modele} !\n";
    }
}

// Exemple d'utilisation
$fusilSniper = new \Armes\FusilDeSniper("AWP", ".338 Lapua Magnum", 2000, "très élevée", 6.5);
echo "Modèle : " . $fusilSniper->getModele() . "\n";
echo "Calibre : " . $fusilSniper->getCalibre() . "\n";
echo "Portée maximale : " . $fusilSniper->getPorteeMax() . " mètres\n";
echo "Précision : " . $fusilSniper->getPrecision() . "\n";
echo "Poids : " . $fusilSniper->getPoids() . " kg\n";
$fusilSniper->tirer();


// Définition des valeurs du cookie
$nom = "utilisateur";
$valeur = "JohnDoe";
$duree = time() + (86400 * 30); // 86400 = 1 jour en secondes

// Création du cookie
setcookie($nom, $valeur, $duree, "/");

// Affichage d'un message pour indiquer que le cookie a été créé
echo "Le cookie $nom a été créé avec succès.";
?>


