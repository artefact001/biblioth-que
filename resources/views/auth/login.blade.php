<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESTION Bibliothéque</title>
</head>
<body>
    <h3 style="text-align: center;margin-bottom: 20px;color: #333;">Veuillez renseigner vos identifiants</h3>

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
    <form action="{{ route('authentification-login') }}" method="POST" style="max-width: 400px;margin: 0 auto;padding: 20px;background-color: #f9f9f9;border-radius: 8px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    @csrf
        <div class="mb-3" style="width: 100%;padding: 10px;margin-bottom: 15px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;">
          <label for="email" class="form-label" style="font-weight: bold;">Addresse email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3" style="width: 100%;padding: 10px;margin-bottom: 15px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;">
          <label for="password" class="form-label" style="font-weight: bold;">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" style="display: inline-block;padding: 10px 20px;background-color: #007bff;color: #fff;border: none;border-radius: 4px;cursor: pointer;transition: background-color 0.3s ease;">Se connecter</button>
      </form>
</body>
</html>
