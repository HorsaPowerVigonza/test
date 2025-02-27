<?php
/**
 * Questo file contiene una funzione per salutare.
 */

/**
 * Stampa un messaggio di saluto.
 *
 * @param string $nome Il nome della persona da salutare.
 */
function saluta($nome) {
    $ciao = 'ciao ciao';
    echo "$ciao, $nome!";
}

//
// @SerenaMalusa ha fatto questa modifica

function conta ($numeri ) {

    if (gettype($numeri) == string) {

        str_replace([',', ' ', ';', '.', '/', '-'], '', $numeri);
        $iMax = strlen($numeri);

        for ($i = 1; $i <= $iMax; $i++) {

            echo $numeri[$i]."\n";

        }

    } else if (gettype($numeri) == array) {

        foreach ($numeri as $numero) {

            echo $numero;

        }

    }


}

// Esempio di utilizzo della funzione saluta
$var = "Pippo-Pluto-Prova";
$prova = 'ALBERTO';
$prova = 'VALERIA 2';
$prova = 'SERENA';

$edit = 'coiahdoushd';
saluta($var);
?>