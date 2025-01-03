<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // (1) Code PHP pour traiter l'envoi de l'email

    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $sujet = htmlentities($_POST['sujet']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    // Variables concernant l'email
    $destinataire = 'laurentlebarbier70@gmail.com'; // Adresse email du webmaster (à personnaliser)
    $contenu = '<html><head><title> ' . $sujet . ' </title></head><body>';
    $contenu .= '<p>Tu as un nouveau message !</p>';
    $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
    $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
    $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "from: $email";

    // Envoyer l'email
    //mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    //header("location:index.php"); // Afficher un message pour indiquer que le message a été envoyé
    // (2) Fin du code pour traiter l'envoi de l'email
}
if (mail($destinataire, $sujet, $contenu, $headers)) {
    echo 'Votre message a bien été envoyé ';
} else // Non envoyé
{
    echo 'Votre message n\'a pas pu être envoyé';
}
header('location: index.php');
