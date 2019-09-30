<?php
include 'Start_end.php';
start_page('base');
$dbHost = 'mysql-ibrahim-boulahrouz.alwaysdata.net';
$dbUser = '189617';
$pwd = 'yousseflepb';
$dbName = 'ibrahim-boulahrouz_db';
$dbLink = mysqli_connect($dbHost, $dbUser, $pwd)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , $dbName)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
$query = 'SELECT Id, Email, Date FROM User';
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['Id'] . '<br/>';
    echo $dbRow['Email'] . '<br/>';
    echo Date('d.m.Y', strtotime($dbRow['Date'])) . '<br/>';
    echo '<br/><br/>';
}
end_page();
?>