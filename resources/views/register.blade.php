<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        @csrf

        <label for="email">Veuillez saisir votre mail :</label>
        <input type="email" name="email" id="email" placeholder="moi@email.com" require>

        <label for="password">Veuillez saisir votre mot de passe :</label>
        <input type="password" name="password" id="password" require>

        <button type="submit">Valider</button>

    </form>

</body>

</html>