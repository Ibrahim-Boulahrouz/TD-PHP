<?php
include 'utils.inc.php';
start_page('TD2');
?>

    <form action="dataprocessing.php" method="post">
        <label for="identifiant">Identifiant :</label><input id="identifiant" type="text" name="identifiant"><br/>

        <label for="civ1">Homme :</label><input id="civ1" type="radio" name="civ" value="Homme" checked><br/>

        <label for="civ2">Femme :</label><input id="civ2" type="radio" name="civ" value="Femme"><br/>

        <label for="email">E-mail :</label><input id="email" type="text" name="email"><br/>

        <label for="mdp">Veuillez saisir votre mot de passe :</label><input id="mdp" type="password" name="mdp"><br/>

        <label for="vmdp">Veuillez confirmer votre mot de passe :</label><input id="vmdp" type="password" name="vmdp"><br/>

        <label for="tel">Téléphone :</label><input id="tel" type="tel" name="tel"><br/>

        <select id="select_pays">
            <option value="">Choisir un pays</option>
            <option value="France">France</option>
            <option value="Algerie">Algerie</option>
            <option value="Allemagne">Allemagne</option>
        </select><br/>
        <label for="CGU">Acceptez les CGU</label><input id="CGU" type="checkbox" name="CGU"><br/>

        <label for="action">Soumettre</label><input id="action" type="submit" name="action" value="mailer"><br/>


    </form>

<?php
end_page();
?>