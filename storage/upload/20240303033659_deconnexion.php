<?php 
$message_retour = null; 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css_espace_membres.css">
    <title>Déconnexion de votre espace personnel</title>
</head>
<body>
<div id="main-container">
    <h1>Deconnexion :</h1>    

<?php 

if (!(empty($_SESSION['pseudo']))) {    
    ?>
    <div id="formulaire">
        <p>Souhaitez-vous déconnecter <?php echo $_SESSION['pseudo'] ?></p>
        <form action="" method="POST">
            <input type="submit" name="submit" id="submit" value="Se déconnecter">
        </form>
    <?php
    if (!(empty($_POST['submit']))){
        // Suppression des variables de session et de la session
        $_SESSION = array();
        session_destroy();
        
        // Suppression des cookies de connexion automatique
        setcookie('pseudo', '');
        setcookie('mdp', '');
        $message_retour = "Déconnexion réussie";
    }
} else {
    $message_retour = "Vous n'êtes pas connecté." ;
}
?>

<p id='message-retour'><strong><?php echo $message_retour; ?></strong></p>

<a href="inscription.php">Inscrivez-vous</a>
<a href="connexion.php">Connectez-vous</a>

</div> 

</body>
</html>