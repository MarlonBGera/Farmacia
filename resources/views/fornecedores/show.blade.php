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
        <h2>Fornecedores</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar Fornecedor...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Fornecedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- FORM PARA CADASTRO -->
                    <form action="/fornecedores/create" method="post" class="row g-3" id="container">
                        @csrf
                        <div class="col-md-12">
                            <label for="razao" class="form-label">Razão Social:</label>
                            <input required type="text" id="razao" name="rSocial" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-12">
                            <label for="fantasia" class="form-label">Nome Fantasia:</label>
                            <input type="text" id="fantasia" name="nFantasia" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="cnpj" class="form-label">CNPJ:</label>
                            <input type="number" id="cnpj" name="cnpj" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="iEstadual" class="form-label">Inscrição Estadual:</label>
                            <input type="number" id="iEstadual" name="iEstadual" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="iMunicipal" class="form-label">Inscrição Municipal:</label>
                            <input type="number" id="iMunicipal" name="iMunicipal" class="form-control form-control-sm">
                        </div>

                        <div class="form-divisor"></div>

                        <div class="col-md-3">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="number" id="cep" name="cep" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="estado" class="form-label">UF:</label>
                            <select id="estado" name="estado" class="form-select form-select-sm">
                                <option value="ma">MA</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-9">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="numeroEnd" class="form-label">Número:</label>
                            <input type="number" id="numeroEnd" name="numeroEnd" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-10">
                            <label for="compEnd" class="form-label">Complemento:</label>
                            <input type="text" id="compEnd" name="compEnd" class="form-control form-control-sm">
                        </div>

                        <div class="form-divisor"></div>

                        <div class="col-md-4">
                            <label for="contato" class="form-label">Nome do Contato:</label>
                            <input type="text" id="contato" name="contato" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="number" id="telefone" name="telefone" class="form-control form-control-sm">
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
                    <th scope="col-md-4">Fornecedor:</th>
                    <th scope="col-md-2">Telefone:</th>
                    <th scope="col-md-3">CNPJ:</th>
                    <th scope="col-md-3">IE:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($fornecedores as $f)
                <tr>
                    <td>
                    @if($f->id < 10)
                        000{{ $f->id }}
                    @elseif($f->id < 100)
                        00{{ $f->id }}
                    @elseif($f->id < 1000)
                        0{{ $f->id }}
                    @else
                        {{ $f->id }}
                    @endif
                    </td>
                    <td>{{ $f->razaoForn }}</td>
                    <td>{{ $f->phoneForn }}</td>
                    <td>{{ $f->cnpjForn }} </td>
                    <td>{{ $f->ieForn }}</td>
                    <td>
                        <button type="submit" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($f->block === 0)
                            <button type="submit" class="bi bi-person-check-fill btn-cliente" title="Desbloquear"></button>
                        @else
                            <button type="submit" class="bi bi-person-x-fill btn-cliente" title="Bloquear"></button>
                        @endif
                        @if($f->active === 0)
                            <button type="submit" class="bi bi-person-plus-fill btn-cliente" title="Ativar"></button>
                        @else
                            <button type="submit" class="bi bi-person-dash-fill btn-cliente" title="Desativar"></button>
                        @endif
                        <button type="submit" class="bi bi bi-archive-fill btn-cliente" title="Pendencias"></button>
                        <button type="submit" class="bi bi-cash-stack btn-cliente" title="Pagamentos"></button>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>              
    </div>
</div>
@endsection