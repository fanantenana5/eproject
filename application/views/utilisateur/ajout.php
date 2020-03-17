<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau utilisateur</title>
</head>
<body>
    <h1>Ajout nouveau utilisateur</h1>
    <form action="<?php echo base_url('utilisateur/traitementAjout') ?>" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="idProfil">Profil</label>
        <select name="idProfil" id="">
            <?php foreach($profils AS $profil){ ?>
                <option value="<?php echo $profil->IDPROFIL ?>"><?php echo $profil->DESIGNATION ?></option>
            <?php } ?>
        </select><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>