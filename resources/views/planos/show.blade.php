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
        <h2>Plano de Contas</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar Plano de Contas...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro do Plano de Contas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- FORM PARA CADASTRO -->
                    <form action="/planos/create" method="post" class="row g-3" id="container">
                        @csrf
                        <div class="col-md-6">
                            <label for="descPlano" class="form-label">Plano de Contas:</label>
                            <input required type="text" id="descPlano" name="descPlano" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label for="tipoPlano" class="form-label">Tipo de Plano de contas:</label>
                            <select name="tipoPlano" id="tipoPlano" class="form-select form-select-sm">
                                <option value="1">Receitas</option>
                                <option value="2">Despesas</option>
                                <option value="3">Outro</option>
                            </select>
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
                    <th scope="col-md-1">Plano de Contas:</th>
                    <th scope="col-md-4">Tipo:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($planos as $p)
                <tr>   
                    <td>
                        @if($p->id < 10)
                            000{{ $p->id }}
                        @elseif($p->id < 100)
                            00{{ $p->id }}
                        @elseif($p->id < 1000)
                            0{{ $p->id }}
                        @else
                            {{ $p->id }}
                        @endif
                    </td>
                    <td>{{ $p->descPlano }}</td>
                    <td>{{ $p->tipoPlano }}</td>
                    <td>
                        <button type="submit" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($p->active === 0)
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