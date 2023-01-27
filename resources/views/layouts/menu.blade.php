<nav class="navbar navbar-light bg-light">
        <div class="myNav container-fluid">
            <div class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" role="button">
                <span class="bi bi-list"></span>
            </div>
            <div class="navbar-name"><span class="fontAmericana">@yield('empresa')</span></div>
                <button class="logout btn bi bi-x-square-fill" role="button"></button>
            <div class="menu offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="text-white offcanvas-header">
                    <img src="/img/logo2.png" alt="Farmácia Americana" class="logo">
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="/" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Clientes
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fornecedor
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                            </a>
                            <ul class="subMenu dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Grupo</a></li>
                                <li><a class="text-white dropdown-item" href="#">Plano de Contas</a></li>
                                <li><a class="text-white dropdown-item" href="#">Forma de Pagamento</a></li>
                                <li><a class="text-white dropdown-item" href="#">ICMS</a></li>
                                <li><a class="text-white dropdown-item" href="#">Dados da Empresa</a></li>
                                <li><a class="text-white dropdown-item" href="#">Caixa</a></li>
                                <li><a class="text-white dropdown-item" href="#">Funcionário</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pedidos
                            </a>
                            <ul class="subMenu dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Pré-venda</a></li>
                                <li><a class="text-white dropdown-item" href="#">Finalizar Venda</a></li>
                                <li><a class="text-white dropdown-item" href="#">Vendas Realizadas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Compras
                            </a>
                            <ul class="subMenu dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="text-white dropdown-item" href="#">Compras</a></li>
                                <li><a class="text-white dropdown-item" href="#">Entrada de Mercadoria</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrativo
                            </a>
                            <ul class="subMenu dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
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
                            <ul class="subMenu dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
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