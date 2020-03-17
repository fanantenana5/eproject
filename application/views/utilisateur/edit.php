<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
</head>
<body>
    <h1>Modification utilisateur</h1>
    <form action="<?php echo base_url("utilisateur/traitementEdit"); ?>" method="post">
        <input type="hidden" name="idUtilisateur" value="<?php echo $utilisateur->idutilisateur; ?>">
        <label for="nom">Nom</label>
        <input type="text" name="nom" value="<?php echo $utilisateur->nom ?>"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br>
        <label for="idProfil">Profil</label>
        <select name="idProfil" id="">
            <?php foreach($profils AS $profil){ ?>
                <option value="<?php echo $profil->IDPROFIL ?>"><?php echo $profil->DESIGNATION ?></option>
            <?php } ?>
        </select><br>
        <input type="submit">
    </form>
</body>
</html>