<?php 
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$phone=$_POST['phone'];
$subject=$_POST['sujet'];
$message=$_POST['message'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>thanks</title>
</head>
<body>
    
    <div>
    <h2>Votre message a bien été envoyé ! </h2> <br>
        <p>
            <?php
            echo "Merci <b> $prenom $nom </b> de nous avoir contacté à propos de <b> $subject </b>.<br>

        Un de nos conseillers vous contactera soit à l’adresse <b>$email</b> ou par téléphone au <b>$phone</b> dans les plus brefs délais pour traiter votre demande : <br><br>
            
            $message"
            ?>
        </p>
    </div>
    
</body>
</html>