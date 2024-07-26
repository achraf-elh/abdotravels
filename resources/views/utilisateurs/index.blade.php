<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listes des utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mx-8 my-5">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
                    <div class="col-md-12  mb-2">
                        <table class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">N° utilisateurs</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">tel</th>
                                    <th scope="col">Actions</th>
                                  </tr>
                                </thead>
                                @foreach ($utilisateurs as $u)
                                  <tr>
                                    <td scope="row">{{$u->id}}</td>
                                    <td>{{$u->nom}}</td>
                                    <td>{{$u->prenom}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->tel}}</td>
                                    <td>
                                        {{-- <a href="{{route('produit.show',$p->slug)}}" class="btn btn-primary">Voir</a> --}}
                                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                                           
                                          {{--  --}}
                                            <a type="button" class="btn btn-sm btn-warning" href="{{route('utilisateurs.edit',$u->id)}}">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                              </svg>
                                            </a>
                                            <form id="{{$u->id}}" action="{{route('utilisateurs.delete',$u->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Supprimer?')" class="btn btn-danger">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                  </svg>
                                                </button>
                                            </form>
                                                        
                                            </div> 
                                    </td>
                                  </tr>
                                  @endforeach
                                
                        </table>
                        <div class="d-flex justify-content-center">
                            {{$utilisateurs->links() }}
                        </div>
                    </div>
            </div>
          </div>
    </div>
    
</body>
</html>