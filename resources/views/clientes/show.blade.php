@extends('layouts.main')
@section('title', "Farmácia Americana")
@section('empresa', "Farmácia Americana")
@section('content')

<div class="container-xxl">
    <div id="clientes-container" class="col-md-12">
        <!-- Button trigger modal -->
            <button type="button" id="btn-cadastrar" class="btn btn-primary btn-cliente" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Cadastrar
            </button>
        <h2>Clientes</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar cliente...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Clientes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- FORM PARA CADASTRO -->
                    <form action="/clientes/create" method="post" class="row g-3" id="container">
                    @csrf
                        <div class="col-md-12">
                            <input class="form-check-input" type="radio" name="pessoa" id="pessoaF" value="1">
                            <label class="form-check-label" for="pessoaF">Pessoa Fisica</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-check-input" type="radio" name="pessoa" id="pessoaJ" value="0">
                            <label class="form-check-label" for="pessoaJ">Pessoa Juridica</label>
                        </div>
                        <div class="col-md-8">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="number" id="cpf" name="cpf" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="rg" class="form-label">RG:</label>
                            <input type="number" id="rg" name="rg" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="nascCliente" class="form-label">Data de Nascimento:</label>
                            <input type="date" id="nascCliente" name="nascCliente" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="sexo" class="form-label">Sexo:</label>
                            <select name="sexo" id="sexo" class="form-select form-select-sm">
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                                <option value="3">Outro</option>
                            </select>
                        </div>

                        <div class="form-divisor"></div>

                        <div class="col-md-3">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="number" id="cep" name="cep" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="estado" class="form-label">UF:</label>
                            <select name="estado" id="estado" class="form-select form-select-sm">
                                <option value="MA">MA</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-10">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="numeroEnd" class="form-label">Número:</label>
                            <input type="number" id="numeroEnd" name="numeroEnd" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-9">
                            <label for="compEnd" class="form-label">Complemento:</label>
                            <input type="text" id="compEnd" name="compEnd" class="form-control form-control-sm">
                        </div>

                        <div class="form-divisor"></div>

                        <div class="col-md-6">
                            <label for="nomeFantasia" class="form-label">Nome Fantasia:</label>
                            <input type="text" id="nomeFantasia" name="nomeFantasia" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="cnpj" class="form-label">CNPJ:</label>
                            <input type="number" id="cnpj" name="cnpj" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="iEstadual" class="form-label">Inscrição Estadual:</label>
                            <input type="number" id="iEstadual" name="iEstadual" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="iMunicipal" class="form-label">Inscrição Municipal:</label>
                            <input type="number" id="iMunicipal" name="iMunicipal" class="form-control form-control-sm">
                        </div>

                        <div class="form-divisor"></div>

                        <div class="col-md-4">
                            <label for="contato" class="form-label">Nome do Contato:</label>
                            <input type="text" id="contato" name="contato" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Telefone:</label>
                            <input type="number" id="phone" name="phone" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control form-control-sm">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form> 
                </div>
                </div>
            </div>
        </div>
        <table class="table table-secondary table-striped table-hover table-sm" id="lista">
            <thead>
                <tr>
                    <th scope="col-md-1">Código:</th>
                    <th scope="col-md-4">Cliente:</th>
                    <th scope="col-md-2">Telefone:</th>
                    <th scope="col-md-3">CNPJ/CPF:</th>
                    <th scope="col-md-3">IE/RG:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($clientes as $cliente)
                <tr>
                    <td>
                    @if($cliente->id < 10)
                        000{{ $cliente->id }}
                    @elseif($cliente->id < 100)
                        00{{ $cliente->id }}
                    @elseif($cliente->id < 1000)
                        0{{ $cliente->id }}
                    @else
                        {{ $cliente->id }}
                    @endif
                    </td>
                    <td>{{ $cliente->nameClient }}</td>
                    <td>{{ $cliente->phoneClient }}</td>
                    <td>
                        @if($cliente->typeClient === 0)
                            {{ $cliente->cnpjClient }}
                        @else
                            {{ $cliente->cpfClient }}
                        @endif
                    </td>
                    <td>
                        @if($cliente->typeClient === 0)
                            {{ $cliente->ieClient }}
                        @else
                            {{ $cliente->rgClient }}
                        @endif
                    </td>
                    <td>
                        <button type="button" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($cliente->block === 0)
                            <button type="button" class="bi bi-person-check-fill btn-cliente" title="Desbloquear"></button>
                        @else
                            <button type="button" class="bi bi-person-x-fill btn-cliente" title="Bloquear"></button>
                        @endif
                        @if($cliente->active === 0)
                            <button type="button" class="bi bi-person-plus-fill btn-cliente" title="Ativar"></button>
                        @else
                            <button type="button" class="bi bi-person-dash-fill btn-cliente" title="Desativar"></button>
                        @endif
                        <button type="button" class="bi bi bi-archive-fill btn-cliente" title="Pendencias"></button>
                        <button type="button" class="bi bi-cash-stack btn-cliente" title="Pagamentos"></button>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>              
    </div>
</div>
@endsection