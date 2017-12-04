<?php
    session_start();
    // Set session variables
        $_SESSION['nom'] ='admin';
        $_SESSION['prenom'] ='boss';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="icon" type="favicon" href="images/ludus.png">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="JS/formulaire_js.js" type="text/javascript"></script>
</head>
<body>
    <section>
    <article>
        <h1>Formulaire</h1>
            <form id="formulaire" method="GET" onsubmit="test_log()" action="">
                <fieldset>
                    <legend>Informations personnelles</legend><br/>
                    <p>Les cases en jaune doivent être obligatoirement remplies</p>
                    <label for="Nom">Nom </label> : <input type="text" id="nom" placeholder="Nom" size="30" maxlength="30" autofocus required onkeyup="active_boutton()" /></br>
                    <label for="Prénom">Prénom </label> : <input type="text" id="prenom" placeholder="Prénom" size="30" maxlength="30" autofocus onkeyup="active_boutton()" required/></br>
                    <label for="password">Mot de passe </label>:<input id="password" type="password" placeholder="Votre Mot de passe" onkeyup="active_boutton()" required></br>
                    <label for="password">Vérification du mot de passe </label>:<input id="confirm_password" type="password" placeholder="Veuillez confirmer votre mdp" onkeyup="active_boutton()" required></br>
                    <label for="mail">Mail </label> : <input type="email" name="mail" id="mail" placeholder="Votre e-mail"/></br>
                    <label for="classe">Votre Classe </label><br/>
                    <select name="classe">
                              <?php
                                $classe= array('F1','F2','BACH','M1','M2');
                                foreach ($classe as $key){

                                        echo "<option value=$key>$key</option>";
                                    } 
                              ?>
                    </select><br/>
                </fieldset>
                <fieldset>
                    <input type="reset" name="reset" value="Effacer" style="background-color: #FFC0CB"/></br><br>
                    <input type="submit" name="submit" id="submit" value="Envoyer" disabled="disabled" style="background-color: #FFC0CB"/ autofocus></br>
                </fieldset>
            </form>
    </article>

</body>
</html>