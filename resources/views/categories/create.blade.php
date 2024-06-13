<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une Catégorie</title>
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
            box-shadow: 0px 0px 10px rgba(240, 239, 239, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-light bg-light">
      <form class="container-fluid justify-content-end">
        <a href="livres" class="btn btn-outline-success me-2" role="button">livres</a>
        <a href="categories" class="btn btn-sm btn-outline-secondary" role="button">Catégories</a>
        <a href="rayons" class="btn btn-sm btn-outline-secondary" role="button">Rayons</a>
      </form>
    </nav>
  </header>

<body>

<div class="container mt-5">
   @auth
   <h1>Ajouter une Catégorie</h1>
   @endauth
    <form action="{{ route('categories.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="col-md-12">
          @auth
         <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
         @endauth
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>











