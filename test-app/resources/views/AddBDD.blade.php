<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un nom de domaine</title>
</head>
<body>
    <h1>Ajouter un nom de domaine</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail')}}
                </div>
            @endif

                <form action="add" method="post">

                @csrf

                    <div class="form-group">
                        <label for="">Cout Annuel</label>
                        <input type="text" class="form-control" name="cout_annuel" placeholder="Entrer le cout annuel" value="{{ old('cout_annuel')}}">
                        <span style="color:red">@error('cout_annuel'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Nom de Domaine</label>
                        <input type="text" class="form-control" name="nom_domaine" placeholder="Entrer le nom de domaine" value="{{ old('nom_domaine')}}">
                        <span style="color:red">@error('nom_domaine'){{ $message }} @enderror</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Societe</label>
                        <input type="text" class="form-control" name="societe" placeholder="Entrer le nom de societe" value="{{ old('societe')}}">
                        <span style="color:red">@error('societe'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer le Nom" value="{{ old('nom')}}">
                        <span style="color:red">@error('nom'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrer le Prenom" value="{{ old('prenom')}}">
                        <span style="color:red">@error('prenom'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-primary"> Enregistrer </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            <a href="/listeBDD">Accès au visuel de l'index</a>
        </div>
</body>
</html>
