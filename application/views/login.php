<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Se connecter</h1>
    <form action="/login" method="post">
        <label for="email">Email</label>
        <input type="text" name="email"><br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>