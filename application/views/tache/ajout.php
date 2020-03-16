<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout nouveau tache</title>
</head>
<body>
    <h1>Ajout de nouveau tache</h1>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id=""><br>
        <label for="details">Details</label>
        <textarea name="details" id="" cols="30" rows="10"></textarea><br>
        <label for="categorie">Categorie</label>
        <select name="categorie" id="">
            <option value="1">affichage</option>
            <option value="2">Metier</option>
            <option value="2">Base de donnee</option>
        </select><br>
        <label for="duree">Duree</label>
        <input type="text" name="duree" id=""><br>
        <input type="submit" value=Ajouter>
    </form>
</body>
</html>