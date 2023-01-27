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
        <h2>Produtos</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search-produto" placeholder="Buscar Produto...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Produtos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- MODAL PARA CADASTRO -->
                    <form action="/protudos/create" class="row g-3" id="container"> 
                        <!-- Tabs navs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Informações</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Tributação</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Precificação</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- INICIO DA ABA DE INFORMAÇÕES -->
                            <div class="row tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Código:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Código de barras:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Tipo de produto:</label>
                                    <select class="form-select form-select-sm" name="" id="">
                                        <option value="1">Mercadoria para revenda</option>
                                        <option value="2">Serviços</option>
                                        <option value="3">Ativo mobilizado</option>
                                        <option value="4">Outros</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="" class="form-label">Descrição do produto:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Grupo:</label>
                                    <select name="" class="form-select form-select-sm">
                                        @foreach($grupos as $g)
                                            <option value="{{ $g->id }}">{{ $g->nomeGrupo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Medida:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Localização:</label>
                                    <select name="" class="form-select form-select-sm">
                                        @foreach($localizacoes as $l)
                                            <option value="{{ $l->id }}">{{ $l->nomeLocalizacao }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Fabricantes:</label>
                                    <select name="" class="form-select form-select-sm">
                                        @foreach($fabricantes as $f)
                                            <option value="{{ $f->id }}">{{ $f->nomeFab }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Origem:</label>
                                    <select name="" class="form-select form-select-sm">
                                        @foreach($fabricantes as $f)
                                            <option value="{{ $f->id }}">{{ $f->nomeFab }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Estoque:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <!-- FIM DA ABA DE INFORMAÇÕES -->
                            <!-- INICIO DA ABA DE TRIBUTAÇÃO -->
                            <div class="row tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="col-md-3 mt-3">
                                    <label for="" class="form-label">CFOP:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for="6" class="form-label">CST:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-7 mt-3">
                                    <label for="" class="form-label">CSOSN:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-9 mt-3">
                                    <label for="" class="form-label">NCM:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="" class="form-label">CEST:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for="" class="form-label">% IBPT:</label>
                                    <input type="number" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-10 mt-3">
                                    <label for="" class="form-label">$ MVA:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <!-- INICIO DA ABA DE TRIBUTAÇÃO -->
                            <!-- INICIO ABA DE PRECIFICAÇÃO -->
                            <div class="row tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Custo:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">ICMS Entrada:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">ICMS Saída:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Operacional:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Outros impostos:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">IPI:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Custo total:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm" disabled>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="" class="form-label">Margem de lucro:</label>
                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="9" class="form-label">Preço de venda:</label>
                                    <input type="number" id="tel" name="phone" class="form-control form-control-sm">
                                </div>
                            </div>
                            <!-- FIM ABA DE PRECIFICAÇÃO -->
                        </div>
                        <!-- TAB NAVS -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
                </div>
            </div>
        </div>
        <table class="table table-secondary table-striped table-hover table-sm" id="lista-produto">
            <thead>
                <tr>
                    <th scope="col-md-1">Código:</th>
                    <th scope="col-md-4">Descrição:</th>
                    <th scope="col-md-4" class="d-none">EAN:</th>
                    <th scope="col-md-2">Marca:</th>
                    <th scope="col-md-3">Localização:</th>
                    <th scope="col-md-3">Estoque:</th>
                    <th scope="col-md-4">Custo:</th>
                    <th scope="col-md-4">Venda:</th>
                    <th scope="col-md-4">Ações:</th>
                </tr>
            </thead>
            <tbody>
@foreach($produtos as $p)
                <tr>
                    <td>
                    @if($p->codProd < 10)
                        000{{ $p->codProd }}
                    @elseif($p->codProd < 100)
                        00{{ $p->codProd }}
                    @elseif($p->codProd < 1000)
                        {{ $p->codProd }}
                    @else
                        {{ $p->codProd }}
                    @endif
                    </td>
                    <td>{{ $p->nameProd }}</td>
                    <td class="d-none">{{ $p->eanProd }}</td>
                    <td>{{ $p->marcaProd }} </td>
                    <td>{{ $p->locProd }}</td>
                    <td>{{ $p->estoqAtProd }} </td>
                    <td>{{ $p->custoTotalProd }}</td>
                    <td>{{ $p->precVendaProd }}</td>
                    <td>
                        <button type="button" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($p->block === 0)
                            <button type="button" class="bi bi-person-x-fill btn-cliente" title="Bloquear"></button>
                        @else
                            <button type="button" class="bi bi-person-check-fill btn-cliente" title="Desbloquear"></button>
                        @endif
                        @if($p->active === 0)
                            <button type="button" class="bi bi-person-dash-fill btn-cliente" title="Desativar"></button>
                        @else
                            <button type="button" class="bi bi-person-plus-fill btn-cliente" title="Ativar"></button>
                        @endif
                        <button type="button" class="bi bi bi-archive-fill btn-cliente" title="Pendencias"></button>
                        <button type="button" class="bi bi-cash-stack btn-cliente" title="Pagamentos"></button>
                    </td>
                </tr>
@endforeach
@if(count($localizacoes) == 0)
                <tr><td class="sem-cadastro" colspan="8">Não há localizações cadastradas!</td></tr>
@endif
            </tbody>
        </table>              
    </div>
</div>
@endsection