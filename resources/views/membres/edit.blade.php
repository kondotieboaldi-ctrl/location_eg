<!DOCTYPE html>
<html>
<head>
    <title>Modifier membre</title>
</head>
<body>

<h1>Modifier membre</h1>

<form action="/membres/{{ $membre->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nom" value="{{ old('nom', $membre->nom) }}"><br><br>
    <input type="text" name="prenom" value="{{ old('prenom', $membre->prenom) }}"><br><br>
    <input type="text" name="telephone" value="{{ old('telephone', $membre->telephone) }}"><br><br>
    <input type="email" name="email" value="{{ old('email', $membre->email) }}"><br><br>

    <button type="submit">Mettre à jour</button>
</form>

</body>
</html>
