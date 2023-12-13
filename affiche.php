<?php
ini_set('display_errors', 1);
$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');

$statement = $db->query('SELECT * FROM chat ORDER BY chat_id ASC LIMIT 30');
$messages = $statement->fetchAll();

foreach ($messages as $message) {
    // Assurez-vous que le pseudo est sécurisé contre les attaques XSS
    $pseudo = htmlspecialchars($message['chat_pseudo']);

    // Ajoutez une balise img avec une classe pour le style
    echo '<div class="message-container">';

    // Utilisez une structure conditionnelle pour attribuer une image de profil en fonction du pseudo
    if ($pseudo === 'Mouton') {
        echo '<img class="profile-image" src="img/pp.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Adem') {
        echo '<img class="profile-image" src="img/1.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Quentin') {
        echo '<img class="profile-image" src="img/2.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Mouad') {
        echo '<img class="profile-image" src="img/3.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Julien') {
        echo '<img class="profile-image" src="img/4.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Enzo') {
        echo '<img class="profile-image" src="img/5.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Ahamad') {
        echo '<img class="profile-image" src="img/6.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Emilien') {
        echo '<img class="profile-image" src="img/7.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Okesse') {
        echo '<img class="profile-image" src="img/8.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Flavian') {
        echo '<img class="profile-image" src="img/9.jpg" alt="Profile Image" />';
    } elseif ($pseudo === 'Léo') {
        echo '<img class="profile-image" src="img/10.jpg" alt="Profile Image" />';
    }
    
    else {
        // Image par défaut si le pseudo n'est pas spécifié
        echo '<img class="profile-image" src="img/pp0.png" alt="Profile Image" />';
    }

    echo '<div class="message-content">';
    echo '<strong>' . $pseudo . '</strong> > ' . $message['chat_message'] . ' <span style="color: #888; font-size: 0.8em;">(' . $message['chat_date'] . ')</span>';

    // Ajouter la balise img si l'image est présente
    if (!empty($message['image_path'])) {
        echo '<br><img src="' . $message['image_path'] . '" alt="Image" style="max-width: 100%; max-height: 200px;" />';
    }

    echo '</div>';
    echo '</div>';
}
?>
