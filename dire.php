<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');
    
    $phrase = $_GET['chat_message'];
    $pseudo = $_GET['chat_pseudo'];
    
    $statement = $db->prepare('INSERT INTO chat (chat_pseudo, chat_message, chat_date) VALUES (?, ?, NOW())');
    $statement->execute([$pseudo, $phrase]);

    echo 'Message enregistré avec succès!';
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
