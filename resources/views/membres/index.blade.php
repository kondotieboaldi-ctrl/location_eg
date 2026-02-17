<!DOCTYPE html>
<html>
<head>
    <title>Liste des membres</title>
</head>
<body>

<h1>Liste des membres</h1>

<a href="/membres/create">Ajouter un membre</a>

<ul>
    @foreach($membres as $membre)
        <li>
            {{ $membre->nom }} {{ $membre->prenom }} - {{ $membre->email }}
            
            <a href="/membres/{{ $membre->id }}/edit">Modifier</a>
            
            <form action="/membres/{{ $membre->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>

        </li>
    @endforeach
</ul>


</body>
</html>
