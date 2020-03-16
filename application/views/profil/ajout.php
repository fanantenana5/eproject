<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout profil</title>
</head>
<body>
    <h1>Ajout de nouveau profil</h1>
    <form action="<?php echo base_url("/profil/traitementAjout") ?>" method="post">
        <label for="designation">Designation</label>
        <input type="text" name="designation" id=""><br>
        <label for="valeur">Valeur</label>
        <input type="text" name="valeur" id=""><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>