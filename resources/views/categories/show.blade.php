<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de la Catégorie</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<header>
    <nav class="navbar navbar-light bg-primary d-center">
      <form class="container-fluid justify-content-end">
        <a href="livres" class="btn btn-outline-success me-2" role="button">livres</a>
        <a href="categories" class="btn btn-sm btn-outline-secondary" role="button">Catégories</a>
        <a href="rayons" class="btn btn-sm btn-outline-secondary" role="button">Rayons</a>
      </form>
    </nav>
  </header>

<body>

<div class="container mt-5">
    <h1>Détails de la Catégorie</h1>
    <div class="card">
        <div class="card-header  text-white">
            {{ $categorie->libelle }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Description: </strong>{{ $categorie->description }}</p>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
