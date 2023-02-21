<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/symbol.png') }}"/>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{ asset('js/functions.js') }}"></script>
</head>
<body>
    <div class="tela-login container-lg">
        <div class="logo-empresa">
            <img src="{{ asset('img/logo.png') }}" alt="Logomarca da empresa">
        </div>
        <form action="/login" method="post" class="form-login row g-3 mt-4">
            <div class="form-floating mb-3 col-md-12">
                <input type="text" class="form-control" id="nome" placeholder="Login" required>
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating col-md-12">
                <input type="password" class="form-control" id="pass" placeholder="Senha" required>
                <label for="pass">Senha</label>
            </div>
            <div class="col-12">
                <button type="submit" class="btn-login btn btn-primary">Entrar</button>
            </div>
        </form>
    </div>
@include('../layouts/_includes/bootstrap');
@include('../layouts/_includes/jquery')
</body>
</html>