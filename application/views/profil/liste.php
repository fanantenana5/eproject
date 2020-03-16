<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de profil utilisateur</title>
</head>
<body>
    <h1>Liste des profils</h1>
    <table>
        <tr>
            <th>Designation</th>
            <th>Valeur</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($profils AS $profil){ ?>
        <tr>
            <td><?php echo $profil->DESIGNATION ?></td>
            <td><?php echo $profil->VALEUR ?></td>
            <td><a href="<?php echo base_url("profil/edit/".$profil->IDPROFIL); ?>">modifier</a></td>
            <td><a href="<?php echo base_url("profil/delete/".$profil->IDPROFIL); ?>">supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>