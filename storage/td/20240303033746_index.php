<?php


// Tester si une session existe et en démarer une si nécessaire
if (!(isset($_SESSION['id']))) {
    session_start();
}

// Placer les cookies
setcookie("pseudo", "", time()+(60*60*24*14), "", "", false, true);
setcookie("mdp", "", time()+(60*60*24*14), "", "", false, true);
setcookie("user_id", "", time()+(60*60*24*14), "", "", false, true);

$message_retour = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css_espace_membres.css">
    <title>Connexion à votre espace personnel</title>
</head>
<body>
<div id="main-container">
    <h1>Connectez-vous !</h1>    
    
    <div id="formulaire">
        <p>Pour vous connecter veuillez saisir les informations ci-dessous</p>
        <form action="" method="POST">
            <strong><label for="pseudo">Votre pseudo :</label></strong><br>
            <input type="text" name="pseudo" id="pseudo"><br>
            <strong><label for="mdp">Votre mot de passe :</label></strong><br>
            <input type="password" name="mdp" id="mdp"><br>
            <label for="connexion_auto">Rester connecté 14 jours :</label><input type="checkbox" id="connexion_auto" name="connexion_auto" value="connexion_auto"><br>
            <input type="submit" name="submit" id="submit" value="Valider votre inscription">
        </form>
<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;chartset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
    
    
    if ((!empty($_POST['pseudo'])) AND (!empty($_POST['mdp'])) AND (isset($_POST['submit']))) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        // Tester si il existe un utilisateur avec le même pseudo dans la table membres
        $req_membre = $bdd->prepare('SELECT user_id, mdp, pseudo FROM user WHERE pseudo = :pseudo');
        $req_membre->execute(array('pseudo' => $pseudo));
        $donnee_membre = $req_membre->fetch();
        if (!($donnee_membre)) {
            // Si l'utilisateur n'existe pas 
            $message_retour = "Utilisateur et/ou mot de passe incorrect.";
        } else {
               // Tester si le hash du mdp saisi correspond à celui du membre qui a le même pseudo
               if (!(password_verify($_POST['mdp'], $donnee_membre['mdp']))) {
                   $message_retour = "Utilisateur et/ou mot de passe incorrect.";
                } else {
                    $_SESSION['user_id'] = $donnee_membre['user_id'];
                    $_SESSION['pseudo'] = $pseudo;
                    $message_retour = "Connexion réussie!";
                    // Tester si le membre veut rester connecté
                    if (isset($_POST['connexion_auto'])) {
                       setcookie("pseudo", $donnee_membre['pseudo'], time()+(60*60*24*14), "", "", false, true);
                       setcookie("mdp", $donnee_membre['mdp'], time()+(60*60*24*14), "", "", false, true);
                       setcookie("user_id", $donnee_membre['user_id'], time()+(60*60*24*14), "", "", false, true);
                    } else {
                        setcookie("pseudo","", time()+(60*60*24*14), "", "", false, true);
                        setcookie("mdp", "", time()+(60*60*24*14), "", "", false, true);
                        setcookie("user_id", "", time()+(60*60*24*14), "", "", false, true);
                    }
                }
            }
        $req_membre->closeCursor();
        } else {
            // Si aucune info saisie on vide la session et les cookies
            $_SESSION['user_id'] = "";
            $_SESSION['pseudo'] = "";
            setcookie("pseudo","", time()+(60*60*24*14), "", "", false, true);
            setcookie("mdp", "", time()+(60*60*24*14), "", "", false, true);
            setcookie("user_id", "", time()+(60*60*24*14), "", "", false, true);
        }
?>
        <p id='message-retour'><strong><?php echo $message_retour; ?></strong></p>
    </div>
    <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous !</a></p>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>