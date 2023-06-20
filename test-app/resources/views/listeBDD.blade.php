<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <style>
    * {box-sizing: border-box;}

    /*Style de texte et on colle en haut de page*/
    body { 
        margin: 0;

        background-color: grey;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
    }

    #titre{
        color: white;
        
        padding-top: 5%;
        padding-left: 30%;
        float: none;
    }

    a:link {
        text-decoration: none;
        color: white;
    }

    .contenantBDD a:hover {
        background-color: red;
        color: white;
    }

    .contenantBDD {
        padding-left: 20%;
        float: none;
        display: inline-block;
        position: relative;
        width: 100%;
    }

    

    .lienAdd a:hover {
        background-color: white;
        color: black;
    }

    .lienAdd {
        float: none;
        position: fixed;
        width: 100%;
        bottom:0;
        background-color: black;
        color: white;
    }
    </style>
</head>
<body>
    <h1 id="titre">Liste des utilisateurs</h1>

    <div class="contenantBDD">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>|</th>
                <th>Societe</th>
                <th>|</th>
                <th>Nom</th>
                <th>|</th>
                <th>Prenom</th>
                <th>|</th>
                <th>id domaine</th>
                <th>|</th>
                <th>Cout Annuel</th>
                <th>|</th>
                <th>Modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients_2 as $client_)
            <tr class="ligneClient">
                <td>{{ $client_->id }}</td>
                <td>|</td>
                <td>{{ $client_->societe }}</td>
                <td>|</td>
                <td>{{ $client_->nom }}</td>
                <td>|</td>
                <td>{{ $client_->prenom }}</td>
                <td>|</td>
                <td>{{ $client_->noms_nomDomaine }}</td>
                <td>|</td>
                <td>{{ $client_->noms_coutAnnuel }}</td>
                <td>|</td>
                <td>
                    <a href="delete/{{ $client_->noms_nomDomaine }}" class="btn btn-danger btn-xs">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
    <div class="lienAdd">
        <hr>
        <a href="/AddBDD">Accès pour ajouter du contenue dans l'index</a>
    </div>
</body>
</html>
