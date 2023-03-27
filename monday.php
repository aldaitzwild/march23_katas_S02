<?php
/**
 * 1 - Créer un formulaire de connection avec deux champs :
 *      - email : champ texte obligatoire qui doit vérifier 
 *                  que le format email est respecté
 *      - mot de passe : champ de mot de passe obligatoire
 * 
 * 2 - Vérifiez côté server que les deux champs sont bien renseignés 
 *     sinon afficher un message d'erreur
 * 
 * 3 - Si l'email est "admin@wcs.com" et que le mot de passe saisie est "admin123"
 *      alors afficher "Bravo, vous êtes identifié."
 *     Sinon réafficher le formulaire avec le message "Désolé, vous n'êtes pas super 
 * Administrateur."
 */

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);

    if(!isset($data['loginEmail']) || empty($data['loginEmail'])) {
        echo '<p>Il manque l\'email.</p>';
    }

    if(!filter_var($data['loginEmail'], FILTER_VALIDATE_EMAIL)) {
        echo '<p>L\'email n\'est pas au bon format</p>';
    }

    if(!isset($data['loginPassword']) || empty($data['loginPassword'])) {
        echo '<p>Il manque le mot de passe.</p>';
    }

    if($data['loginEmail'] === 'admin@wcs.com' && $data['loginPassword'] === 'admin123') {
        echo "<p>Bravo, vous êtes identifié.</p>";
        die();
    } else {
        echo "<p>Désolé, vous n'êtes pas super Administrateur.";
    }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 </head>
 <body>
    <form method="post">
        <p>
            <label for="loginEmail">Email : </label>
            <input type="email" name="loginEmail" id="loginEmail">
        </p>

        <p>
            <label for="loginPassword">Password : </label>
            <input type="password" name="loginPassword" id="loginPassword">
        </p>
        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>
 </body>
 </html>