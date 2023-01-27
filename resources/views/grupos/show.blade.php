@extends('layouts.main')
@section('title', "Farmácia Americana")
@section('empresa', "Farmácia Americana")
@section('content')

<div class="container-xxl">
    @if(session('msg'))
        <div id="flashMensage" class="modal" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p class="msg">{{ session('msg') }}</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
    @endif
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
                            <button type="submit" id="btn-cadastrar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flashMensage">Cadastrar</button>
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
@foreach($grupos as $g)
                <tr>
                    <td>
                        @if($g->id < 10)
                            000{{ $g->id }}
                        @elseif($g->id < 100)
                            00{{ $g->id }}
                        @elseif($g->id < 1000)
                            0{{ $g->id }}
                        @else
                            {{ $g->id }}
                        @endif
                    </td>
                    <td>{{ $g->nomeGrupo }}</td>
                    <td>{{ $g->descGrupo }}</td>
                    <td>{{ $g->comissaoGrupo }}%</td>
                    <td>{{ $g->descMaxGrupo }}%</td>
                    <td>
                        <a href="/grupos/{{ $g->id }}" class="bi bi-pencil-square btn-cliente" title="Editar"></a>
                        @if($g->active === 0)
                            <a class="bi bi-person-plus-fill btn-cliente" title="Ativar"></a>
                        @else
                            <a class="bi bi-person-dash-fill btn-cliente" title="Desativar"></a>
                        @endif
                    </td>
                </tr>
@endforeach
@if(count($grupos) == 0)
                <tr><td class="sem-cadastro" colspan="6">Não há grupos cadastrados!</td></tr>
@endif
            </tbody>
        </table>              
    </div>
</div>
@endsection