<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Societe</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>id domaine</th>
                <th>Cout Annuel</th>
                <th>Modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients_2 as $client_)
            <tr>
                <td>{{ $client_->id }}</td>
                <td>{{ $client_->societe }}</td>
                <td>{{ $client_->nom }}</td>
                <td>{{ $client_->prenom }}</td>
                <td>{{ $client_->noms_nomDomaine }}</td>
                <td>{{ $client_->noms_coutAnnuel }}</td>
                <td>
                    <a href="delete/{{ $client_->noms_nomDomaine }}" class="btn btn-danger btn-xs">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
        <a href="/AddBDD">Accès pour ajouter du contenue dans l'index</a>
    </div>
</body>
</html>