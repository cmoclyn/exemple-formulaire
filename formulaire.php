<!doctype HTML>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        if( isset( $_POST ) ){
            echo '<pre>';
            var_dump( $_POST );
            echo '</pre>';
        }
        $username = $_POST['username'] ?? '';
        // C'est un raccourci pour :
        $username = '';
        if( isset( $_POST['username'] ) ){
            $username = $_POST['username'];
        }

        $pass   = $_POST['mot_de_passe'] ?? '';
        $sexe   = $_POST['sexe'] ?? '';
        $bio    = $_POST['bio'] ?? '';
        $adj    = $_POST['adjectifs'] ?? []; // Ici adjectifs est un tableau ([] dans le HTML)
        $riche  = $_POST['riche'] ?? '';
        ?>
        <!-- Pas d'action = même fichier -->
        <form action="" method="POST">
            <!-- Le fieldset met un peu de style basique -->
            <fieldset>
                <legend>Informations utilisateur</legend>
                Nom d'utilisateur : <input type="text" name="username" value="<?= $username; ?>"/><br />
                Mot de passe : <input type="password" name="mot_de_passe" value="<? $pass; ?>" />
                <hr />
                Sexe : 
                <select name="sexe">
                    <option value="H" <? if( 'H' == $sexe ){ echo 'selected'; } ?> >Homme</option>
                    <option value="F" <? if( 'F' == $sexe ){ echo 'selected'; } ?> >Femme</option>
                </select>
                <hr />
                Votre bio : <textarea name="bio" placeholder="Tapez votre bio ici..."><?= $bio; ?></textarea>
                <hr />
                Des adjectifs pour me définir :<br />
                <input type="checkbox" name="adjectifs[]" value="intelligent" <? if( in_array( 'intelligent', $adj ) ){ echo 'checked'; } ?>/> Intelligent<br />
                <input type="checkbox" name="adjectifs[]" value="beau gosse" <? if( in_array( 'beau gosse', $adj ) ){ echo 'checked'; } ?>/> Beau gosse
                <hr />
                Voulez-vous être riche ?<br />
                <input type="checkbox" name="riche" value="oui" <? if( 'oui' == $riche ){ echo 'checked'; } ?> /> Oui<br />
                <input type="checkbox" name="riche" value="non" <? if( 'non' == $riche ){ echo 'checked'; } ?> /> Non
                <hr />
                <input type="submit" value="Envoyer !" />
            </fieldset>
        </form>
    </body>
</html>