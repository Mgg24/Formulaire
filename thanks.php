<!DOCTYPE html>
<html>
<head>
    <title>Merci d'avoir pris le temps de remplir ce formulaire</title>
    <meta charset="utf-8">
</head>
<body>
<?php

    $nom = $_POST['user_name'];
    $prenom = $_POST['user_firstname'];
    $email = $_POST['user_email'];
    $tel = $_POST['user_tel'];
    $sujet = $_POST['sujet'];
    $message = $_POST['user_message'];

if (isset($_POST['submit']))
{
    echo "Merci $prenom  $nom de nous avoir contacté à propos de $sujet.

Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $tel dans les plus brefs délais pour traiter votre demande : 

$message";
}?>


</body>
</html>
