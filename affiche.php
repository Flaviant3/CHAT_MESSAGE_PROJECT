<?php
ini_set('display_errors', 1);
$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');

$statement = $db->query('SELECT * FROM chat ORDER BY chat_id ASC LIMIT 30');
$messages = $statement->fetchAll();

foreach ($messages as $message) {
    echo '<strong>' . $message['chat_pseudo'] . '</strong> > ' . $message['chat_message'] . ' <span style="color: #888; font-size: 0.8em;">(' . $message['chat_date'] . ')</span><br />';
}
?>
