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
        <h2>ICMS</h2>
        <form action="" class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control form-control-sm" id="search" placeholder="Buscar ICMS...">
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro do ICMS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- FORM PARA CADASTRO -->
                    <form action="/icms/create" method="post" class="row g-3" id="container">
                        @csrf
                        <div class="col-md-3">
                            <label for="codigo" class="form-label">Código:</label>
                            <input readonly type="text" id="codigo" name="cfop" class="form-control form-control-sm" value="1111">
                        </div>
                        <div class="col-md-4">
                            <label for="desc" class="form-label">Descrição:</label>
                            <input required type="text" id="desc" name="descCfop" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label for="financ" class="form-label">Financeiro:</label>
                            <select id="financ" name="finanCfop" class="form-select form-select-sm">
                                <option value="1">Receber</option>
                                <option value="2">Pagar</option>
                                <option value="3">Caixa</option>
                                <option value="4">Nenhuma</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="estoque" class="form-label">Estoque:</label>
                            <select id="estoque" name="estoqueCfop" class="form-select form-select-sm">
                                <option value="1">Incluir</option>
                                <option value="2">Baixar</option>
                                <option value="3">Nenhuma</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="planoContas" class="form-label">Plano de Contas:</label>
                            <select id="planoContas" name="planoContas" class="form-select form-select-sm">
                                @foreach($planos as $p)
                                    <option value="{{ $p->id }}">{{ $p->descPlano }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="baseIcms" class="form-label">Base ICMS:</label>
                            <input type="text" id="baseIcms" name="baseCfop" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label for="StCfop" class="form-label">Base ICMS ST:</label>
                            <input type="text" id="StCfop" name="stCfop" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label class="form-check-label" for="ipiICMS">
                                Calcular IPI?:
                            </label>
                            <input class="form-check-input" type="checkbox" name="ipiCfop" id="ipiICMS">
                        </div>
                        <div class="col-md-3">
                            <label for="refICMS" class="form-label">Referência:</label>
                            <input class="form-check-input" type="checkbox" name="refCfop" id="refICMS">
                        </div>
                        <div class="col-md-3">
                            <label for="finalICMS" class="form-label">Finalidade:</label>
                            <select id="finalICMS" name="finalidadeCfop" class="form-select form-select-sm">
                                <option value="1">Normal</option>
                                <option value="2">Complementar</option>
                                <option value="3">Ajuste</option>
                                <option value="4">Devolução</option>
                                <option value="5">Nenhuma</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="obsIcms" class="form-label">Observações:</label>
                            <input type="text" id="obsIcms" name="obsCfop" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label for="leiICMS" class="form-label">Tributos de imposto Federal, Estadual e Municipal:</label>
                            <input type="checkbox" id="leiICMS" name="leiIcms" class="form-check-input">
                        </div>
                        <div class="col-md-6">
                            <label for="permICMS" class="form-label">Crédito de ICMS?:</label>
                            <input type="checkbox" id="permICMS" name="permcfop" class="form-check-input">
                        </div>
                        <div class="col-md-3">
                            <label for="comissaoICMS" class="form-label">Comissão:</label>
                            <input type="text" id="comissaoICMS" name="comisCfop" class="form-control form-control-sm">
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
@foreach($icms as $g)
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
                    <td>{{ $g->cfopICMS }}</td>
                    <td>{{ $g->nameICMS }}</td>
                    <td>{{ $g->financeiroICMS }}%</td>
                    <td>{{ $g->estoqueICMS }}%</td>
                    <td>
                        <button type="submit" class="bi bi-pencil-square btn-cliente" title="Editar"></button>
                        @if($g->active === 0)
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