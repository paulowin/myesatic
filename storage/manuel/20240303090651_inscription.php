<?php $message_retour = null; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css_espace_membres.css">
    <title>Inscription à votre espace personnel</title>
</head>
<body>
<div id="main-container">
    <h1>Inscrivez-vous !</h1>    
    
    <div id="formulaire">
        <p>Pour vous connecter veuillez saisir les informations ci-dessous</p>
        <form action="" method="POST">
            <strong><label for="pseudo">Votre pseudo :</label></strong><br>
            <input type="text" name="pseudo" id="pseudo"><br>
            <strong><label for="mail">Votre adresse email :</label></strong><br>
            <input type="text" name="mail" id="mail"><br>
            <strong><label for="mdp">Votre mot de passe :</label></strong><br>
            <i>Attention minimum 8 caractères avec au moins : 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial ($ @ % * + - _ ?!).</i><br>
            <input type="password" name="mdp" id="mdp"><br>
            <strong><label for="confirmation">Confirmez votre mot de passe :</label></strong><br>
            <input type="password" id="confirmation" name="confirmation"><br>
            <input type="submit" name="submit" id="submit" value="Valider votre inscription">
        </form>
<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;chartset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    if (!empty($_POST['submit'])) { 
        if ( (!empty($_POST['pseudo'])) AND (!empty($_POST['mail'])) AND (!empty($_POST['mdp'])) AND (!empty($_POST['confirmation'])) ) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['mail']);
            // tester la disponibilité du pseudo
            $req_pseudo = $bdd-> prepare('SELECT COUNT(pseudo) AS occurence_pseudo FROM user WHERE pseudo = ?');
            $req_pseudo -> execute(array($pseudo));
            $data_pseudo = $req_pseudo->fetch();
            if ($data_pseudo['occurence_pseudo'] == 0) {
                // vérifier la valitié du mail
                if (preg_match("#^[a-z0-9_.-]+@[a-z0-9_.-]{2,}\.[a-z]{2,4}$#", $mail)) {
                    // vérifier la validité du mdp
                    // if (preg_match("#[0-9a-zA-Z$@%*+_?!-]{4}[0-9]+[a-z]+[A-Z]+[$@%*+_?!-]+#",$_POST['mdp'])) {
                        // vérifier la correspondance entre mdp et confirmation
                        if ($_POST['mdp'] == $_POST['confirmation']) {
                            // vérifier si doublon mail dans table membres
                            $req_mail = $bdd-> prepare('SELECT COUNT(mail) AS occurence_mail FROM user WHERE mail = ?');
                            $req_mail -> execute(array($mail));
                            $data_mail = $req_mail->fetch();
                            if ($data_mail['occurence_mail'] == 0) {
                                // Insérer dans la table membres
                                $req = $bdd->prepare('INSERT INTO user (pseudo, mail, mdp) VALUES (:pseudo, :mail, :mdp)');
                                $req->execute(array(
                                    'pseudo' => $pseudo,
                                    'mail'=> $mail,
                                    'mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT)
                                ));
                                $req->closeCursor();
                                $message_retour = '<strong>Inscription réussie ! Bienvenue dans l\'équipe !</strong>';
                            // sinon renvoyer un message de doublon sur le mail
                            } else {
                                $message_retour = '<strong>Un compte existe déjà pour cette adresse.</strong>';
                            }
                        // renvoyer un message d'erreur sur la correspondance entre mdp et confirmation
                        } else {
                            $message_retour = '<strong>Les mots de passe ne correspondent pas.</strong>';
                        }
                    // renvoyer une erreur de mot de passe non valide
                    // } else {
                    //     $message_retour = '<strong>Le mot de passe n\'est pas valide.</strong>';
                    // }
                // renvoyer un message de mail non valide
                } else {
                    $message_retour = '<strong>L\'adresse mail n\'est pas valide.</strong>';
                }
            // renvoyer un message de non disponibilité du pseudo
            } else {
                $message_retour = '<strong>Ce pseudo n\'est pas disponible.</strong>';
            }
        // renvoyer un message d'informations manquantes
        } else {
            $message_retour = '<strong>Information manquante, toutes les informations doivent être saisies.</strong>';
        }
    }
    
//    unset ($_POST['submit'], $_POST['pseudo'], $_POST['mail'], $_POST['mdp'], $_POST['confirmation']);
$_POST['submit'] = null;
$_POST['pseudo'] = null;
$_POST['mail'] = null;
$_POST['mdp'] = null;
$_POST['confirmation'] = null;
$_POST['message_retour'] = null;


?>
        <p id='message-retour'><strong><?php echo $message_retour; ?></strong></p>
    </div>

    <a href="index.php">Retour à la page de connexion</a>
</div>
</body>
</html>