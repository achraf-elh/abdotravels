<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter ville</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row my-4">
            <div class="col-md-8 mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center text-success">
                            Ajouter un utilisateur
                        </h3>
                    </div>
                    <div class="card-body">
                        {{-- enctype="multipart/form-data" --}}
                        <form action="{{ route('utilisateurs.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="nom" value="{{ old('nom') }}">
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="prenom" placeholder="prenom" value="{{ old('prenom') }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Téléphone</label>
                                <input type="number" class="form-control" name="tel" placeholder="tel" value="{{ old('tel') }}">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="pass" placeholder="mot de passe" value="{{ old('pass') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
