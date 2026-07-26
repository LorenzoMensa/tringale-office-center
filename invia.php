<?php
//funzione per avviare la sessione//
session_start();

// Solo se la richiesta arriva davvero in POST 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //superglobale //

    //trim toglie spazzi
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $argomento= isset($_POST['argomento']) ? trim($_POST['argomento']): '';
    $messaggio= isset($_POST['messaggio']) ? trim($_POST['messaggio']): '';
    //Validazione minima sui campi 
    if ($nome === '' || $email === '' || $messaggio === '') {
        $_SESSION['errore'] = 'Compila tutti i campi obbligatori (nome, email, messaggio).';
    } else {
    // Prepara la riga da salvare
    $riga = date('Y-m-d H:i:s') . " | $nome | $email | $telefono | $argomento | $messaggio\n"; 

    // crea il file e aggiunge una riga nel file di testo
    file_put_contents(__DIR__ . '/messaggi.txt', $riga, FILE_APPEND);

    $_SESSION['successo'] = true;
    }
} else {
    $_SESSION['errore'] = 'Richiesta non valida.';
}

header('Location: contatti.php');
exit;
