<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Livres</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-SZC4UzMIblzyPl2t+B4VVvhx0+jN+M0lPdU5Y7hnGRk3SpWFE0tOGqfMaTiH9B26iSZM6KrJZoGBvi1Kv7I5lg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }
        .card-deck {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            flex: 1 1 calc(33.333% - 20px);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card-title {
            text-align: center;
            color: #343a40;
            margin-bottom: 10px;
        }
        .card-text {
            text-align: center;
            margin-bottom: 10px;
        }
        .card-footer {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        .btn-icon {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-end">
                <a href="livres" class="btn btn-outline-success me-2" role="button">Livres</a>
                <a href="categories" class="btn btn-sm btn-outline-secondary" role="button">Catégories</a>
                <a href="rayons" class="btn btn-sm btn-outline-secondary" role="button">Rayons</a>
                @guest
                    <a href="login" class="btn btn-sm btn-outline-secondary" role="button">Connexion</a>
                @endguest
                @auth
                    <a href="logout" class="btn btn-sm btn-outline-secondary" role="button">Déconnexion</a>
                @endauth
            </form>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Liste des Livres</h1>
        <a href="{{ route('livres.create') }}" class="btn btn-primary mb-3">Ajouter un Livre</a>
        <div class="card-deck">
            @foreach($livres as $livre)
                <div class="card">
                    <img src="{{ asset('storage/' . $livre->image) }}" class="card-img-top" alt="{{ $livre->titre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $livre->titre }}</h5>
                        <p class="card-text">Auteur : {{ $livre->auteur }}</p>
                        <p class="card-text">ISBN : {{ $livre->isbn }}</p>
                        <p class="card-text">Éditeur : {{ $livre->editeur }}</p>
                        <p class="card-text">Rayon : {{ $livre->rayon->libelle }}</p>
                        <p class="card-text">Catégorie : {{ $livre->categorie->libelle }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-info btn-icon"><i class="fas fa-info-circle"></i></a>
                        @auth
                            <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-warning btn-icon"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-icon"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-Fo3rlrZj/kTcAVq3ttr3+6yQ5Zol8Zlu4e4y0FqAIeb8cHqg1yZIQ61C1P5ylF9xTMEp3RkSE30fE4DdGyaOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
