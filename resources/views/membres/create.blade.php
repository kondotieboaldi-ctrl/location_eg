<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un membre</title>
</head>
<body>

<h1>Ajouter un membre</h1>

<form action="/membres" method="POST">
    @csrf

    <!-- Ici on peut pré-remplir le champ nom avec la valeur précédente en cas d'erreur de validation
    <input type="text" name="nom" placeholder="Nom"><br><br> -->
    <input type="text" name="nom" value="{{ old('nom') }}">

    <!--ici message d'erreur -->
    @error('nom')
    <div style="color:red">{{ $message }}</div>
    @enderror

    <input type="text" name="prenom" placeholder="Prénom"><br><br>
    <input type="text" name="telephone" placeholder="Téléphone"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>

    <button type="submit">Sauvegarder</button>
</form>

</body>
</html>
