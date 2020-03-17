<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification profil</title>
</head>
<body>
    <form action="<?php echo base_url('profil/traitementedit') ?>" method="post">
        <input type="hidden" name="idProfil" value="<?php echo $idProfil; ?>"><br>
        <label for="designation">Designation</label>
        <input type="text" name="designation" value="<?php echo $designation; ?>"><br>
        <label for="valeur">Valeur</label>
        <input type="text" name="valeur" value="<?php echo $valeur; ?>"><br>
        <input type="submit" value="Modifier"><br>
    </form>
</body>
</html>