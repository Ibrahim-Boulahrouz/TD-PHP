<?php
include 'utils.inc.php';
start_page('Data processing');

$action = $_POST['action'];
$identifiant = $_POST['identifiant'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' . $identifiant . '<br/>';
    $message .= 'Email : ' . $email . '<br/>';
    $message .= 'Mot de passe : ' . $mdp . '<br/>';
    mail('salut@gmail.com','Inscription',$message);?>

    Votre message a bien été envoyé ! Retour à la page d'accueil
    <meta http-equiv="refresh" content="5; url=td2.php">
    <?php
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
end_page();
?>