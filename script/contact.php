<?php
if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['sujet']) || empty($_POST['message'])) {
    header("Location: ../?error=1");
    exit;
}

$nom = $_POST['nom'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$success = mail("contact@adam-marzuk.fr", "[CONTACT SITE] $sujet de $nom", $message, "Reply-To: $email");

if ($success) {
    header("Location: ../?success=1");
} else {
    echo "Une erreur est survenue lors de l'envoi du message.";
}
?>