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
        <form action="/login" method="post" class="form-login row g-2 mt-4">
            {{-- Verificando se houve erro na autenticação da tentativa de login! --}}
            @if($message = Session::get('Error')) {{-- Caso dê sucesso no envio ele avisa que foi enviado --}}
                <div class="alert alert-warning">    
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($errors->has('login'))
                <div class="alert alert-warning">
                    <span class="text-danger">{{ $errors->first('login') }}</span>
                </div>
            @endif
            @if ($errors->has('password'))
                <div class="alert alert-warning">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
            @endif
            @csrf
            
            <div class="form-floating mb-3 col-md-12">
                <input type="text" value="{{ old('login') }}" class="form-control" name="login" id="nome" placeholder="Login" required>
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating col-md-12">
                <input type="password" class="form-control" name="password" id="pass" placeholder="Senha" required>
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