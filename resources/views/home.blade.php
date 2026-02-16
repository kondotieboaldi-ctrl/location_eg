<!DOCTYPE html>
<html>
<head>
    <title>Liste des membres</title>
</head>
<body>

<h1>Liste des membres</h1>

<ul>
    @foreach($membres as $membre)
        <li>
            {{ $membre->nom }} {{ $membre->prenom }} - {{ $membre->email }}
        </li>
    @endforeach
</ul>

</body>
</html>