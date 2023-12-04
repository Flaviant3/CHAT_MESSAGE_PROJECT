<?php
// dire.php
try {
    // connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');
    
    // récupération des variables GET
    $phrase = $_GET['message'];
    $pseudo = $_GET['pseudo'];
    
    // requête préparée pour éviter les injections SQL
    $statement = $db->prepare('INSERT INTO chat (chat_pseudo, chat_message, date) VALUES (?, ?, NOW())');
    $statement->execute([$pseudo, $phrase]);

    // envoi d'une réponse pour le débogage
    echo 'Message enregistré avec succès!';
} catch (PDOException $e) {
    // gestion des erreurs de connexion ou d'exécution de la requête
    echo 'Erreur : ' . $e->getMessage();
}
