@extends('layouts.main')
@section('title', $grupo->nomeGrupo)
@section('empresa', "Farmácia Americana")
@section('content')

<div class="container-xxl">
    <div class="editContainer col-md-8">
        <form action="/grupos/editar" id="formEdit" class="row g-3" onsubmit='return confirm("Você tem certeza que atualizar este grupo?");'>
            @csrf
            <div class="col-md-4">
                <label for="razao" class="form-label">Grupo:</label>
                <input required autofocus type="text" id="razao" name="nomeGrupo" class="form-control form-control-sm" value="{{ $grupo->nomeGrupo }}">
            </div>
            <div class="col-md-4">
                <label for="fantasia" class="form-label">Descrição:</label>
                <input required type="text" id="fantasia" name="descGrupo" class="form-control form-control-sm" value="{{ $grupo->descGrupo }}">
            </div>
            <div class="col-md-3">
                <label for="fantasia" class="form-label">Comissão:</label>
                <input required type="text" id="fantasia" name="comissaoGrupo" class="form-control form-control-sm" value="{{ $grupo->comissaoGrupo }}">
            </div>
            <div class="col-md-3">
                <label for="fantasia" class="form-label">Desconto:</label>
                <input required type="text" id="fantasia" name="descMaxGrupo" class="form-control form-control-sm" value="{{ $grupo->descMaxGrupo }}">
            </div>
            <div class="modal-footer">
                <button type="submit" id="btn-atualizar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flashMensage">Atualizar</button>
            </div>
        </form>
    </div>
</div>


@endsection