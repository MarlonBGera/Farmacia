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
        <h2>Grupos</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar Grupo...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro do Grupo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- FORM PARA CADASTRO -->
                    <form action="/grupos/create" method="post" class="row g-3" id="container">
                        @csrf
                        <div class="col-md-3">
                            <label for="razao" class="form-label">Código:</label>
                            <input readonly type="text" id="razao" name="codGrupo" class="form-control form-control-sm" value="1111">
                        </div>
                        <div class="col-md-4">
                            <label for="razao" class="form-label">Grupo:</label>
                            <input required type="text" id="razao" name="nomeGrupo" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="fantasia" class="form-label">Descrição:</label>
                            <input type="text" id="fantasia" name="descGrupo" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="fantasia" class="form-label">Comissão:</label>
                            <input type="text" id="fantasia" name="comissaoGrupo" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="fantasia" class="form-label">Desconto:</label>
                            <input type="text" id="fantasia" name="descMaxGrupo" class="form-control form-control-sm">
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
                    <th scope="col-md-1">Localização:</th>
                    <th scope="col-md-4">Descrição:</th>
                    <th scope="col-md-4">Comissão:</th>
                    <th scope="col-md-4">Desconto Máximo:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($caixas as $c)
                <tr>
                    <td>
                        @if($c->id < 10)
                            000{{ $c->id }}
                        @elseif($c->id < 100)
                            00{{ $c->id }}
                        @elseif($c->id < 1000)
                            0{{ $c->id }}
                        @else
                            {{ $c->id }}
                        @endif
                    </td>
                    <td>{{ $c->nomeGrupo }}</td>
                    <td>{{ $c->descGrupo }}</td>
                    <td>{{ $c->comissaoGrupo }}%</td>
                    <td>{{ $c->descMaxGrupo }}%</td>
                    <td>
                        <button type="submit" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($c->active === 0)
                            <button type="submit" class="bi bi-person-plus-fill btn-cliente" title="Ativar"></button>
                        @else
                            <button type="submit" class="bi bi-person-dash-fill btn-cliente" title="Desativar"></button>
                        @endif
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>              
    </div>
</div>
@endsection