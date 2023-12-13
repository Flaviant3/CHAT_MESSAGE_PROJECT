<?php
ini_set('display_errors', 1);
$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');

if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';  // Créez un répertoire "uploads" pour stocker les images
    $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

    // Récupérer le pseudo et le message du formulaire
    $pseudo = isset($_POST['chat_pseudo']) ? $_POST['chat_pseudo'] : '';
    $message = isset($_POST['chat_message']) ? $_POST['chat_message'] : '';

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
        echo "Image envoyée avec succès.";

        // Enregistrez le chemin de l'image dans la base de données
        $imagePath = $uploadDir . basename($_FILES["image"]["name"]);
        $statement = $db->prepare('INSERT INTO chat (chat_pseudo, chat_message, image_path) VALUES (?, ?, ?)');
        $statement->execute([$pseudo, $message, $imagePath]);
    } else {
        echo "Erreur lors de l'envoi de l'image.";
    }
} else {
    echo "Erreur lors de l'envoi de l'image.";
}
?>
