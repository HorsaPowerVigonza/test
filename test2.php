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
    echo "Ciao, $nome!";
}

// Esempio di utilizzo della funzione saluta
$var = "Pippo-Pluto-Prova";
saluta($var);
?>