<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Profil</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($utilisateurs AS $utilisateur){ ?>
            <tr>
                <td><?php echo $utilisateur->nom; ?></td>
                <td><?php echo $utilisateur->Profil; ?></td>
                <td><a href="<?php echo base_url('utilisateur/edit/'.$utilisateur->idutilisateur); ?>">Modifier</a></td>
                <td><a href="<?php echo base_url('utilisateur/delete/'.$utilisateur->idutilisateur); ?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    <p><a href="<?php echo base_url('utilisateur/ajout'); ?>">Ajouter nouveau utilisateur</a></p>
</body>
</html>