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
                        modifier {{$utilisateurs->nom.' '.$utilisateurs->prenom}}
                    </h3>
                </div>
                <div class="card-body">
                    {{-- enctype="multipart/form-data"     --}}
                    <form action="{{route('utilisateurs.update',$utilisateurs->id)}}" method="post" >
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{$utilisateurs->nom}}" placeholder="nom">                          
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">prenom</label>
                            <input type="text" class="form-control" name="prenom" value="{{$utilisateurs->prenom}}" placeholder="prenom">                          
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" name="email" value="{{$utilisateurs->email}}" placeholder="email">                          
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label">tel</label>
                            <input type="number" class="form-control" name="tel" value="{{$utilisateurs->tel}}" placeholder="tel">                          
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">mot de passe</label>
                            <input type="password" class="form-control" name="pass" value="{{$utilisateurs->pass}}" placeholder="mot de passe">                          
                        </div>
                          <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    
</body>
</html>