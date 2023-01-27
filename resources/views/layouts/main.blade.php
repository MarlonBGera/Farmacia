<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <!-- CSS da aplicação/site -->
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

        <!-- Icone do site -->
        <link rel="icon" type="image/png" href="/img/icon.png"/>

        <!-- Boostrap JS -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>

        <title>@yield('title')</title>

        <!-- Fonts do google-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rowdies" rel="stylesheet">

    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" role="button">
                <span class="bi bi-list"></span>
            </div>
            <a href="/"><div class="navbar-name"><img src="/img/icon-branco.png" alt=""><span>@yield('empresa')</span></div></a>
                <button class="btn bi bi-x-square-fill" role="button"></button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="text-white offcanvas-header">
                    <img src="/img/logo2.png" alt="Farmácia Americana">
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="/clientes" id="offcanvasNavbarDropdown" role="button" aria-expanded="false">
                            Clientes
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="/fornecedores" id="offcanvasNavbarDropdown" role="button" aria-expanded="false">
                            Fornecedor
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="/produtos" id="offcanvasNavbarDropdown" role="button" aria-expanded="false">
                            Produtos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="/grupos">Grupo</a></li>
                                <li><a class="text-white dropdown-item" href="/localizacoes">Localização</a></li>
                                <li><a class="text-white dropdown-item" href="/fabricantes">Fabricante</a></li>
                                <li><a class="text-white dropdown-item" href="/planos">Plano de Contas</a></li>
                                <li><a class="text-white dropdown-item" href="/formpags">Forma de Pagamento</a></li>
                                <li><a class="text-white dropdown-item" href="/icms">ICMS</a></li>
                                <li><a class="text-white dropdown-item" href="#">Dados da Empresa</a></li>
                                <li><a class="text-white dropdown-item" href="/caixas">Caixa</a></li>
                                <li><a class="text-white dropdown-item" href="#">Funcionário</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pedidos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Pré-venda</a></li>
                                <li><a class="text-white dropdown-item" href="#">Finalizar Venda</a></li>
                                <li><a class="text-white dropdown-item" href="#">Vendas Realizadas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Compras
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Compras</a></li>
                                <li><a class="text-white dropdown-item" href="#">Entrada de Mercadoria</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrativo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Fluxo de Caixa</a></li>
                                <li><a class="text-white dropdown-item" href="#">Promoções</a></li>
                                <li><a class="text-white dropdown-item" href="#">Balanço</a></li>
                                <li><a class="text-white dropdown-item" href="#">Dados da Empresa</a></li>
                                <li><a class="text-white dropdown-item" href="#">Emissão de NF</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Contas a Pagar</a></li>
                                <li><a class="text-white dropdown-item" href="#">Contas a Receber</a></li>
                                <li><a class="text-white dropdown-item" href="#">Pagamentos</a></li>
                                <li><a class="text-white dropdown-item" href="#">Recebimentos</a></li>
                                <li><a class="text-white dropdown-item" href="#">Fluxo de Caixa</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="text-white dropdown-item" href="#">Vendas por item</a></li>
                                <li><a class="text-white dropdown-item" href="#">Vendas por Vendedor</a></li>
                                <li><a class="text-white dropdown-item" href="#">Vendas por Grupo</a></li>
                                <li><a class="text-white dropdown-item" href="#">Comissão</a></li>
                                <li><a class="text-white dropdown-item" href="#">Ticket Medio</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="text-white dropdown-item" href="#">Valorização</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </body>
    <footer>
        <span>Criado por <a href="http://fb.com/MarlonBrenoGera" target="_blank">Marlon Breno Gera</a>. &copy; 2022.</span>
    </footer>

    <!-- JQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- JS da aplicação/site -->
    <script src="js/funcoes.js"></script>


</html>