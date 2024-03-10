<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
  <form id='loginForm' method="HEAD" action="{{ asset('login') }}">
    @csrf
    <label for="username">Nombre de Usuario:</label>
    <input type="text" id="username">
    <label for="password">Contraseña:</label>
    <input type="password" id="password">
    <button type="submit">Iniciar Sesión</button>
  </form>

{{-- <script src="script.js"></script> --}}
</body>
</html>