<?php
ini_set('display_errors', 1);
/* *
*  connexion bdd
* */
// connexion en local 
$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');

// requête pour obtenir les 10 derniers messages
$statement = $db->query('SELECT * FROM chat ORDER BY chat_id DESC LIMIT 10');

$messages = $statement->fetchAll();

// affichage des messages
foreach ($messages as $message) {
    echo '<strong>' . $message['chat_pseudo'] . '</strong> > ' . $message['chat_message'] . ' <br />';
}
