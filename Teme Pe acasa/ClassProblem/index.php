<?php

// Includem fișierele necesare
require_once 'ContCurent.php';
require_once 'ContDeEconomii.php';

function gestionareConturi() {
    // Creare conturi
    $contCurent = new ContCurent("Ion Popescu", -133);
    $contEconomii = new ContDeEconomii("Ana Ionescu", 5000);

    // Actualizare dobândă pentru contul de economii
    $contEconomii->actualizeazaDobanda(0.04); 

    try {
        $contCurent->depunere(500);
        $contCurent->extragere(2000); 
    } catch (Exception $e) {
       
    }

    try {
        $contEconomii ->depunere(1000);
        $contEconomii->extragere(300); 
    } catch (Exception $e) {
       
    }

    // Afișare solduri și dobândă
    echo "Sold cont curent: {$contCurent->getSold()}\n";
    echo "Sold cont economii: {$contEconomii->getSold()}\n";
    echo "Dobândă cont economii: " . $contEconomii->calculeazaDobanda() . "\n";
}

gestionareConturi();

?>
