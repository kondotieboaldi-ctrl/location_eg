<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un membre</title>
</head>
<body>

<h1>Ajouter un membre</h1>

<form action="/membres" method="POST">
    @csrf

    <input type="text" name="nom" placeholder="Nom"><br><br>
    <input type="text" name="prenom" placeholder="Prénom"><br><br>
    <input type="text" name="telephone" placeholder="Téléphone"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>

    <button type="submit">Sauvegarder</button>
</form>

</body>
</html>
