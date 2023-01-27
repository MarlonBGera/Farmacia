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
        <h2>Fabricantes</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar Fabricante...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Fabricante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- FORM PARA CADASTRO -->
                    <form action="/fabricantes/create" method="post" class="row g-3" id="container">
                        @csrf
                        <div class="col-md-6">
                            <label for="razao" class="form-label">Fabricante do produto:</label>
                            <input required type="text" id="razao" name="nomeFab" class="form-control form-control-sm">
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
                    <th scope="col-md-1">Fabricante:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($fabricantes as $f)
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
                    <td>{{ $f->nomeFab }}</td>
                    <td>
                        <button type="submit" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($f->active === 0)
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